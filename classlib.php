<?php
// instantiating classes

function ClassAutoLoad($ClassName){
        $directories = array("database");
        foreach($directories AS $dir){
            $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $ClassName . ".php";
            if(is_readable($FileName)){
                require $FileName;
            }
        }
    }
spl_autoload_register('ClassAutoLoad', true, true);

// Instantiate DbConnection
$dbConnection = new DbConnection();

// Get PDO instance
$pdo = $dbConnection->getPdo();
