<?php
namespace PropertyFinder\Repository;

interface IEntityRepository
{
    public function findById($id);
    public function findAll();
    public function insert($object);
    public function remove($object);
    public function update($object);
}