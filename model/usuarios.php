
<?php

require './model/db.php';

 class Usuarios extends DataBase{


    public function getAll()  
    {
         $result= $this->query("SELECT * FROM users");
         if($result->num_rows > 0) 
         {
            
            while($row = $result->fetch_array()) 
            {
                   $datos[] = [
                     'id' => $row[0],
                     'nombre' => $row[1]
                  ];
            }
            return $datos;
            $this->db->close();
         } 
    }


 }

?>

