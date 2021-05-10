<?php

include('database_connection.php');

/*$query = "SELECT * FROM tbl_student ORDER BY student_name ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();*/

?>
<!DOCTYPE html>
<html>
<head>
<title>Facilities Agreement</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="generator" content="pdftohtml 0.36"/>
<meta name="date" content="2020-04-23T20:22:19+00:00"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /></head>
<frameset cols="100,*">
<frame name="links" src="http://clausematics.mobilytedev.com/demo/document_ind.html"/>
<frame name="contents" src="http://clausematics.mobilytedev.com/demo/document-1.html"/>
</frameset>


<!-- <script>  
$(document).ready(function(){ 
 alert('hey');
 $('a').tooltip({
  classes:{
   "ui-tooltip":"highlight"
  },
  position:{ my:'left center', at:'right+50 center'},
  content:function(result){
   $.post('fetch.php', {
    id:$(this).attr('id')
   }, function(data){
    result(data);
   });
  }
 });
  
});  
</script> -->
</html>


<!-- <html>  
    <head>  
        <title>Clause Matics</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>  
    <body>  
        <div class="container">
   <br />
   
   <h3 align="center">Clause Matics</a></h3><br />
   <br />
   <div class="row">
    <div class="col-md-3">
    
    </div>
    <div class="col-md-6">
     <div class="panel panel-default">
      <div class="panel-heading">
       <h3 class="panel-title">Student Details</h3>
      </div>
      <div class="panel-body">
       <div class="table-responsive">
        <table class="table table-striped table-bordered">
         <tr>
          <th>Student Name</th>
         </tr>
         <?php
         //foreach($result as $row)
         {
          //echo '<tr><td><b><a href="#" id="'.$row["student_id"].'" title=" ">'.$row["student_name"].'</a></b></td></tr>';
         }
         ?>
        </table>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
    </body>  
</html> -->  


