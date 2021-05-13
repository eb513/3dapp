<?php

class Model{

    public $dbhandle;

    public function __construct()
    {
        $dsn = 'sqlite:./db/test1.db';

        try {
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
        } catch (PDOEXception $e) {
            echo "I'm sorry Elia. I'm afraid I can't connect to the database!";

            print new Exception($e->getMessage());
        }
    }

    function dbCreateTable(){
        try {
            $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT,
            x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
            return "Model_3D table is successfully created inside test1.db file";
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    function dbInsertData(){
        try {
            $this->dbhandle->exec(
                "INSERT INTO Model_3D(Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                VALUES (1, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');".
                "INSERT INTO Model_3D(Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                VALUES (2, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');".
                "INSERT INTO Model_3D(Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                VALUES (3, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');");
            return "X3D model data inserted successfully inside test1.db";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    function dbGetData(){
        try {
            $sql = 'SELECT * FROM Model_3D';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i=-0;
            while ($data = $stmt->fetch()) {
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                $i++;
            }
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return $result;
    }

}

?>