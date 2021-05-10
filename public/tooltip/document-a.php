<?php
include('document/database_connection.php');

$query = "SELECT `term` FROM definitions ORDER BY term ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$terms = [];
foreach ($result as $row) {
    //echo $row['term']."<br />\n";
    array_push($terms,$row['term']);
}

//print_r($terms);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Clause Matics - FACILITIES AGREEMENT</title>
<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
/* Pattern styles */
.left-half a, .left-half {
    color: #fff;
    font-family: sans-serif;
    font-size: 13px;
    margin-bottom: 0;
    display: block;
}
.left-half {
    background-color: #0e0e0d;
    position: fixed;
    left: 10px;
    width: 122px;
    text-align: center;
    height: 100vh;
    overflow-y: auto;
    # padding-top: 33px;
    top: 0;
}
.left-half .list-item-block {
    padding: 0px;
    margin: 0px;
    list-style: none;
    margin-top: 47px;
}
.left-half h4 {
    font-weight: bold;
    background: #675e5e;
    display: block;
    padding: 10px 0;
    position: fixed;
    width: 105px;
    top: 0;
    font-size: 14px;
    margin-top: 0;
}
.left-half li.active a {
    color: #888484;
}
.left-half li a {
    cursor: pointer;
}
.left-half li {
    margin-bottom: 15px;
}


.right-half {
  # background-color: #b6701e;
  position: absolute;
  right: 0px;
  width: 90%;
}

.tooltip-terms {
  background-color: yellow;
} 
</style>
<script type="text/javascript">
  $(document).ready(function(){ 
     $("#result").load("documents/document-1.html");
     var arr = '<?php echo json_encode($terms)?>';
     var list = JSON.parse(arr);
     setTimeout(function(){         
       var str1 = $('div#result').html(); 
       $.each(list, function(key1, value1) {
         var text1 = '<span class="tooltip-terms" term="'+value1+'">'+value1+'</span>';
         str1 = replaceAll(str1, value1, text1);
         $('div#result').html(str1);           
       });       
     }, 2000);    

      $(document).on('click', '.pageIndex', function() {
      page = $(this).attr('page');      
      $('#result').load('documents/document-'+page+'.html');  
      setTimeout(function(){      
       var str = $('div#result').html().replace(/&nbsp;/g, " ");
       $.each(list, function(key, value) {
         var text = '<span class="tooltip-terms" term="'+value+'">'+value+'</span>';
         str = replaceAll(str, value, text);
         $('div#result').html(str);          
       });       
     }, 3000);

     });
   });

  function replaceAll(str, term, replacement) {   
    return str.replace(new RegExp(escapeRegExp(term), 'gi'), replacement);
  }

  function escapeRegExp(string){
      return string.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
  } 
</script>
<script> 
 $(document).tooltip({
  items:'.tooltip-terms',
  classes:{
   "ui-tooltip":"highlight"
  },
  position:{ my:'left center', at:'right+50 center'},
  content:function(result){
   $.post('document/fetch.php', {
    term:$(this).attr('term')
   }, function(data){
    result(data);
   });
  }
 });  
</script>
<script>
$(document).ready(function(){
  $(".left-half li").click(function(){
    $(this).addClass("active").siblings().removeClass('active');
  });
});
</script>
</head>
<body>  
  <section class="container">   
      <div class="left-half">
        <h4>Page Index</h4>
      <ul class="list-item-block">
        <?php 
          for($i=1;$i<=182;$i++){
            $pageId = 'page'.$i;
            echo '<li><a id='.$pageId.' page='.$i.' class="pageIndex">Page' .$i. '</a></li>';
          }     
        ?>
      </ul>
    </div>  
    <div class="right-half" id="result" style="clear:both;"></div>        
  </section>
</body>
</html>
