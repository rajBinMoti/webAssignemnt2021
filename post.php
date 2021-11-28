<?php
session_start();
$user = $_SESSION['_user'];

// fetch post

require_once './utilities/db.php';

function get_post_by_id($post_id)
{
    try {
        $db = db_connect();

        $select_statment = "
        SELECT * FROM blogpost WHERE post_id = :post_id
        ";

        $select_statment = $db->prepare($select_statment);
        $select_statment->bindParam(":post_id", $post_id);
        $select_statment->execute();
        $post =  $select_statment->fetch(PDO::FETCH_ASSOC);
        return $post;
    } catch (PDOException $e) {
        return "ERROR";
    }
}

$post = get_post_by_id($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>

    <?php require_once 'header.php' ?>

    <div class="bg-info m-3">
        <h1><?= $post['post_title'] ?></h1>
        <p><?= $post['post_body'] ?></p>
    </div>

</body>

</html>