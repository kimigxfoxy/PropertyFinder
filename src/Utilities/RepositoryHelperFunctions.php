<?php

namespace PropertyFinder\Utilities;

class RepositoryHelperFunctions
{
    public function generateFindByWhereClause($array){
        $whereClause="";
        $lastElement = end($array);
        foreach ($array as  $key => $value){
            If($value != $lastElement) {
                $whereClause=$key." = ".$value. "AND ";
            }else{
                $whereClause=$key." = ".$value;
            }
        }

        return $whereClause;
    }

}