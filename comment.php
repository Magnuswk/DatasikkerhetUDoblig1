<?php
include("functions.php");


if (isset($_POST['comment'])){
$comment = $_POST['content'];

mysqli_query("INSERT INTO comment (content, id, post_id) VALUES ('$comment','$id','$content')") or die (mysqli_error());

?>
<script>
window.location = 'home.php';
</script>

<?php
}
?>