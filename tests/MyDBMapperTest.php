<?php

use IutLens\Tache\BD\MyBDMapper;
use PHPUnit\DbUnit\DataSet\CsvDataSet;
use PHPUnit\DbUnit\TestCaseTrait;
use PHPUnit\Framework\TestCase;

class MyDBMapperTest extends TestCase {
    use TestCaseTrait;
    static private $pdo = null;
    private $conn = null;


    /**
     * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */
    public function getConnection() {
        if (!defined('USER'))
            define('USER', null);
        if (!defined('PASS'))
            define('PASS', null);
        if (!defined('NAME'))
            define('NAME', __DIR__.'/data/maBaseTest.sqlite');
        if (!defined('OPTIONS'))
            define('OPTIONS', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        if (!defined('DSN'))
            define('DSN', 'sqlite:'.NAME);

        if ($this->conn === null) {
            if (self::$pdo == null) {
                try {
                    self::$pdo = new PDO(DSN,USER, PASS, OPTIONS);
                } catch (PDOException $e) {
                    echo "Erreur :".$e->getMessage().PHP_EOL;
                }
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, NAME);
        }

        return $this->conn;
    }

    /**
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    public function getDataSet() {
        $dataSet = new CsvDataSet(";");
        $dataSet->addTable('tache', dirname(__FILE__)."/data/taches.csv");

        return $dataSet;
    }

    public function testToutesLesTaches(): void {
        $mapper = new MyBDMapper(self::$pdo);
        $allTasks = $mapper->fetchAllTask();
        $this->assertCount(20, $allTasks);
    }

    /**
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */
    protected function getTearDownOperation() {
        return \PHPUnit\DbUnit\Operation\Factory::TRUNCATE();
    }
}