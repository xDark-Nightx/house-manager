<?php

namespace System\Controller;

defined('__PROJECT_DIR__') or define('__PROJECT_DIR__', $_SERVER['DOCUMENT_ROOT']);
require_once(__PROJECT_DIR__."/resources/config.php");

class Database{
    private \PDO $mConnection;

    private function Connect() : bool{
        try {
            if (!isset($config['db']['sql'])){
                return false;
            }

            $credentials = $config['db']['sql'];

            $this->mConnection = new \PDO("sqlsrv:server = {$credentials['host']} ; {$credentials['connectionInfo']}",
                $credentials['username'], $credentials['password']);

            return true;
        } catch (\PDOException $exception) {
            print "[Could not connect to SQL Server] -> error: {$exception->getMessage()}\n";
            return false;
        }
    }

    public function Query($query, $fetchAll = true)
    {
        if (!$this->Connect()){
            return false;
        }

        try{
            $stmt = $this->mConnection->query($query);

            if ($stmt === false){
                return false;
            }

            if ($fetchAll){
                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            }

            return $result;
        } catch (\Exception $exception){
            print "[Could not execute query] -> error: {$exception->getMessage()}\n";
            return false;
        }
    }
}