<?php
include('functions.php');
if (isset($_POST['post'])){
$content  = $_POST['content'];

    //id = user_id UNIQUE TO USER
mysqli_query("INSERT INTO post (content, date_created, id) VALUES ('$content','".strtotime(date("Y-m-d h:i:sa"))."','$id') ")or die(mysqli_error());

?>
<script>
window.location = 'home.php';
</script>
<?php
}
?>
