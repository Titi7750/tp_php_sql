<?php

class GarageQueries {
    private $dbh;

    function startConnection() {
        $user = 'root';
        try{
            $this->dbh = new PDO('mysql:host=localhost;dbname=tp_sql;charset=UTF8', $user);
            // echo("Connection OK");
        }
        catch(PDOException $ex) {
            die("Connection KO");
        }
    }

    function showGarages() {
        $sql = "SELECT * FROM garages";
        $query = $this->dbh->query($sql);
        $garages = $query->fetchAll();
        
        foreach($garages as $garage) {
            echo '<p>';
            echo $garage['id'] . ' ';
            echo $garage['garage_name'] . ' ';
            echo $garage['garage_city'] . ' ';
            echo $garage['garage_creation'] . ' ';
            echo $garage['garage_turnover'] . ' ';
            echo '<a href="show_cars.php?garage_id='. $garage['id']  .'">View cars</a>'. ' ';
            echo '<a href="delete_garage.php?garage_id='. $garage['id']  .'">Delete</a>'. ' ';
            echo '</p>';
        }
    }

    function showCars($garage_id) {
        $sql = "SELECT * FROM cars WHERE car_garage_id = " . $garage_id . "";
        $query = $this->dbh->query($sql);
        $cars = $query->fetchAll();
        
        foreach($cars as $car) {
            echo '<p>';
            echo $car['id'] . ' ';
            echo $car['car_model'] . ' ';
            echo $car['car_color'] . ' ';
            echo $car['car_price'] . ' ';
            echo $car['car_garage_id'] . ' ';
            echo '</p>';
        }
    }

    function addGarage($new_garage) {
        $sql = "INSERT INTO garages (garage_name, garage_city, garage_creation, garage_turnover) VALUES (:garage_name, :garage_city, :garage_creation, :garage_turnover)";
        $stmt = $this->dbh->prepare($sql);
        $succeed = $stmt->execute($new_garage);
        return $succeed;
    }

    function deleteGarage($garage_id) {
        $sql = "DELETE FROM garages WHERE id = " . $garage_id . "";
        $query = $this->dbh->query($sql);
        $succeed = $query->execute();
        return $succeed;
    }
}

?>