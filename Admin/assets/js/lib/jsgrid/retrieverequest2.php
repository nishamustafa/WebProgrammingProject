<?php

    switch($_SERVER["REQUEST_METHOD"]) {

        case "GET":

            $dbhost = "localhost";  
            $dbuser = "root";
            $dbpsw = "";    
            $dbname= "donate4all";

            @$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpsw);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $data = array();
            $stmt = $dbh->prepare("SELECT * FROM request"); 
            $stmt->execute();

            $affected_rows = $stmt->rowCount(); //Rows count

            if ($affected_rows == 0) {

                echo "no data";
                exit();
            }

            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {

                $data[] = $row;

            }
            echo json_encode($data);
            break;
          }
?>