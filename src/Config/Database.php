<?php
namespace PropertyFinder\Config;

use PDO;
use PDOException;

class Database
{
    protected static $instance;
    protected function __construct() {}
    public static function getInstance() {
        if(empty(self::$instance)) {
            try {
                $sqliteDir=realpath(__dir__).'/../var/db/property_finder.sqlite3';
                self::$instance = new PDO('sqlite:'.$sqliteDir) or die('Unable to open database');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch(PDOException $error) {
                echo $error->getMessage();
            }
        }
        return self::$instance;
    }
}