<?php
/**
 * Created by PhpStorm.
 * User: hp 250
 * Date: 19/12/2018
 * Time: 21:10
 */

namespace PropertyFinder\Repository;

use Exception;
use PDO;
use PropertyFinder\Config\Database;
use PropertyFinder\Utilities\RepositoryHelperFunctions;

class BoardingCardRepository implements IEntityRepository
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
            $sql = "SELECT * FROM BoardingCard WHERE ID=:ID";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':ID', $id);
            $stmt->execute();
            $journey = $stmt->fetchAll(PDO::FETCH_CLASS,"PropertyFinder\Models\BoardingCard");
            return $journey[0];
        }catch (Exception $e) {
            print $e->getMessage();
        }
    }

    public function findBy($array){
        $repositoryHelperFunctions=new RepositoryHelperFunctions();
        $whereClause=$repositoryHelperFunctions->generateFindByWhereClause($array);
        try {
            $sql = "SELECT * FROM BoardingCard WHERE ".$whereClause;
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $boardingCard = $stmt->fetchAll(PDO::FETCH_CLASS,"PropertyFinder\Models\BoardingCard");
            return $boardingCard;
        }catch (Exception $e) {
            print $e->getMessage();
        }
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function insert($object)
    {
        // TODO: Implement insert() method.
    }

    public function remove($object)
    {
        // TODO: Implement remove() method.
    }

    public function update($object)
    {
        // TODO: Implement update() method.
    }
}