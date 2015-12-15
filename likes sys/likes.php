<html>
<head>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<?php
require_once "config.php";
$pid='2'; //Post id - Post is "Hi everybody"
$uid='2'; //User id - User is "Subin Siby"
$sql=$dbh->prepare("SELECT * FROM likestbl WHERE pid=2 AND uid=2");
$sql->execute(array($pid, $uid));
$likess = $sql->rowCount();
print $likess;
if($likess>0){
 echo '<p class="like" id="'.$pid.'" title="Unlike">Unlike</p>';
}else{ 
 echo '<p class="like" id="'.$pid.'" title="Like">Like</p>';
}
?>
</html>
<script> 
var that;
$(document).ready(function(){
 $('.like').click(function(){
  if($(this).attr('title') == 'Like'){
   that = $(this);
   $.post('action.php', {pid:$(this).attr('id'), action:'like'},function(){
    that.text('Unlike');
    that.attr('title','Unlike');
   });
  }else{
   if($(this).attr('title') == 'Unlike'){
    that = $(this);
    $.post('action.php', {pid:$(this).attr('id'), action:'unlike'},function(){
     that.text('Like');
     that.attr('title','Like');
    });
   }
  }
 });
});
</script>

























