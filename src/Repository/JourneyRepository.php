<?php
/**
 * Created by PhpStorm.
 * User: hp 250
 * Date: 19/12/2018
 * Time: 17:36
 */

namespace PropertyFinder\Repository;

use Exception;
use PDO;
use PropertyFinder\Config\Database;
use PropertyFinder\Models\Journey;
use PropertyFinder\Utilities\RepositoryHelperFunctions;

class JourneyRepository implements IEntityRepository
{

    private $db;

    /**
     * JourneyRepository constructor.
     * @param $db
     */
    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function findById($id)
    {
        try {
            $sql = "SELECT * FROM Journey WHERE ID=:ID";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':ID', $id);
            $stmt->execute();
            $journey = $stmt->fetchAll(PDO::FETCH_CLASS,"PropertyFinder\Models\Journey");
            //get boarding cards one to many relationship
            $boardingCardRepository=new BoardingCardRepository();
            $boardingCards=$boardingCardRepository->findBy(array("journey_id"=>$id));
            if(!empty($journey)){
                $journey[0]->setBoardingCards($boardingCards);
                return $journey[0];
            }else{
                return $journey;
            }
        }catch (Exception $e) {
            print $e->getMessage();
        }
    }

    public function findBy($array){
        $repositoryHelperFunctions=new RepositoryHelperFunctions();
        $whereClause=$repositoryHelperFunctions->generateFindByWhereClause($array);
        try {
            $sql = "SELECT * FROM Journey WHERE ".$whereClause;
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $journeys = $stmt->fetchAll(PDO::FETCH_CLASS,"PropertyFinder\Models\Journey");
            return $journeys;
        }catch (Exception $e) {
            print $e->getMessage();
        }
    }

    public function findAll()
    {
        try {
            $sql = "SELECT * FROM Journey";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $journeys = $stmt->fetchAll(PDO::FETCH_CLASS,"PropertyFinder\Models\Journey");
            //get boarding cards one to many relationship
            foreach ($journeys as $journey){
                $boardingCardRepository=new BoardingCardRepository();
                $boardingCards=$boardingCardRepository->findBy(array("journey_id"=>$journey->getId()));
                $journey->setBoardingCards($boardingCards);
            }
            return $journeys;
        }catch (Exception $e) {
            print $e->getMessage();
        }
    }


    public function insert($object)
    {
        if($object instanceof Journey){
            try {
                $sql = "INSERT INTO Journey(id) VALUES(NULL)";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch (Exception $e) {
                print $e->getMessage();

            }
        }
    }

    public function remove($object)
    {
        if($object instanceof Journey){
            try {
                $sql = "DELETE FROM Journey WHERE ID=:ID";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':ID', $object->getId());
                $stmt->execute();
            }catch (Exception $e) {
                print $e->getMessage();

            }
        }
    }

    public function update($object)
    {
        if($object instanceof Journey){
            try {
                $sql = "UPDATE Journey SET ID = :ID WHERE ID=:ID";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':ID', $object->getId());
                $stmt->execute();
            }catch (Exception $e) {
                print $e->getMessage();

            }
        }
    }

}