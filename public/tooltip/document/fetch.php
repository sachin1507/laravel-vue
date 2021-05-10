<?php

//fetch.php

include('database_connection.php');

if(isset($_POST["term"]))
{
 $query = "SELECT * FROM definitions WHERE term = '".$_POST["term"]."'";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $output = '';

 foreach($result as $row)
 {

  $definition = $row["definition"];
  /*$output .= ' 
  <p><b>Term - </b>'.$row["term"].'</p>
  <p><b>Definition. - </b>'.$row["definition"].'</p>
  ';*/
 }
 echo $definition;
}

?>