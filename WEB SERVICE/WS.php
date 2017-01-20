<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","EXAMEN") or die("Error " . mysqli_error($connection));
if ($_SERVER['REQUEST_METHOD'] == "GET")
{
        //fetch table rows from mysql db
        $sql = "select * from Matiere";
        $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
        //create an array
        $emparray = array();
        while($row =mysqli_fetch_assoc($result))
        {
            $emparray[] = $row;
        }
        echo json_encode($emparray);
}
else 
{
      if($_SERVER['REQUEST_METHOD'] == "POST")
      {
            if (isset ($_REQUEST['id']))
            { 
                $id =$_REQUEST['id'];
                $sql="DELETE FROM Matiere WHERE Nom_matiere='$id'";
                $query = mysqli_query($connection, $sql) or die("Error in Delete process " . mysqli_error($connection));
            }  
          else
        {  
            $matiere = $_POST['matiere'];
            $coeff = $_POST['coefficient'];
            $note = $_POST['note'];
            
            $sql = "INSERT INTO `EXAMEN`.`Matiere` (`Nom_matiere`, `Coefficient`, `Note`) VALUES ('$matiere', '$coeff', '$note');";
            $query = mysqli_query($connection, $sql) or die("Error in Insertion " . mysqli_error($connection));
            if($query)
            {
                $json = array("status" => 1, "msg" => "Ajout de matière avec success!");
            }
            else
            {
                $json = array("status" => 0, "msg" => "Erreur d’ajout de matière");
            }
        }
      }
       else
       {
           /*if($_SERVER['REQUEST_METHOD'] == "DELETE")
           {
               $id =$_REQUEST['id'];
               $sql="DELETE FROM Matiere WHERE Nom_matiere='$id'";
               $query = mysqli_query($connection, $sql) or die("Error in Delete process " . mysqli_error($connection));
            if($query)
            {
                $json = array("status" => 1, "msg" => "Successufull delete!");
            }
            else
            {
                $json = array("status" => 0, "msg" => "Delete failed");
            }
           }*/

           $json = array("status" => 0, "msg" => "Méthode non supporté");		
       }
        echo json_encode($json);
}
    //close the db connection
    mysqli_close($connection);
?>
