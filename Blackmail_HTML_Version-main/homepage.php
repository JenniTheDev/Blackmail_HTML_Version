
<?php 
  if($result = $db->query("SELECT * FROM user")){
    if($count = $result->num_rows){
      while($row = $result->fetch_object()){
?>
        <div class = "divClass">
          <?php echo $row->uname; ?><br><br>
          <?php echo $row->blackmailed; ?><br><br>
        </div>
<?php          
      }
    $result->free();
    }
  }
?></br>