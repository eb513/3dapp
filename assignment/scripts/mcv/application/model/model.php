<?php

class Model{

    public $dbhandle;

    public function __construct()
    {
        $dsn = 'sqlite:../../db/database.db';

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
            $this->dbhandle->exec("DROP TABLE '3D_Model';
            CREATE TABLE '3D_Model' (Id INTEGER PRIMARY KEY, brand TEXT, x3dModelTitle TEXT,
            x3dCreationMethod TEXT, modelName TEXT, flickrSearch TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT);");
            return "3D_Model table is successfully created inside test1.db file";
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    function dbInsertData(){
        try {
            $this->dbhandle->exec(
                "DELETE FROM '3D_Model';
                INSERT INTO '3D_Model'('Id', 'brand', 'x3dModelTitle', 'x3dCreationMethod', 'modelName', 'flickrSearch', 'modelTitle', 'modelSubtitle', 'modelDescription')
                VALUES (1, 'Coke', 'Coca Cola X3D Model', 'This X3D model of the coke bottle has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'coke.x3d', 'Coca Cola Bottle', 'History of Coca Cola', 'Atlanta Beginnings', 'It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs’ Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs’ Pharmacy put it on sale for five cents (about 3p) a glass.');".
                "INSERT INTO '3D_Model'('Id', 'brand', 'x3dModelTitle', 'x3dCreationMethod', 'modelName', 'flickrSearch', 'modelTitle', 'modelSubtitle', 'modelDescription')
                VALUES (2, 'Sprite', 'Sprite X3D Model', 'This X3D model of the sprite can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'sprite.x3d', 'Sprite Can', 'Sprite - Fanta Klare Zitrone', 'First introduced in 1961', 'Crisp, refreshing and clean-tasting, Sprite is the world’s leading lemon and lime-flavoured soft drink. It first hit shop shelves back in 1961 and today it’s sold in more than 190 countries. In 2013, we changed the recipe for Sprite. By adding stevia plant extract, a zero-calorie sweetener from the stevia plant, we’ve been able to reduce the drink’s calorie and sugar content by 37% compared to it’s previous recipe.');".
                "INSERT INTO '3D_Model'('Id', 'brand', 'x3dModelTitle', 'x3dCreationMethod', 'modelName', 'flickrSearch', 'modelTitle', 'modelSubtitle', 'modelDescription')
                VALUES (3, 'Fanta', 'Fanta X3D Model', 'This X3D model of the fanta cup has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'fanta.x3d', 'Fanta', 'Fanta - Orange Freshness', '90 unique flavours', 'Bright, bubbly and a popular favourite, Fanta is a soft drink with a tingly, fruity taste. It’s made with 5% juice. As part of our ongoing commitment to reduce the calories in some of our most popular drinks, in April 2017 we launched our lower sugar recipe for Fanta Orange. The new formula has benefited a 2.1g reduction in sugar per 100ml and delivers our ‘best Fanta taste ever’*. First introduced in 1940, Fanta is the second oldest brand of The Coca-Cola Company. All in all, there are more than 90 flavours of Fanta globally!');"
            );
            return "X3D model data inserted successfully inside test1.db";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    function dbGetData($modelToLoad){
        try {
            $sql = 'SELECT * FROM "3D_Model" WHERE brand="'.$modelToLoad.'";';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i=0;
            while ($data = $stmt->fetch()) {
                $result[$i]['Id'] = $data['Id'];
                $result[$i]['brand'] = $data['brand'];
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$i]['modelName'] = $data['modelName'];
                $result[$i]['flickrSearch'] = $data['flickrSearch'];
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

    public function dbGetBrand(){
        return array("-", "Coke", "Coke Light", "Coke Zero", "Sprite", "Dr Pepper", "Fanta");
    }

}

?>