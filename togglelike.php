<?php


require_once './utilities/db.php';

function toggle_like($post_id, $user_id, $isLiked)
{
    try {
        $db = db_connect();
        if ($isLiked != 0) {
            $statement = "
            DELETE FROM blogpostlikes WHERE user_id = :user_id && post_id = :post_id; 
            ";
            $statement = $db->prepare($statement);
            $statement->bindParam(':user_id', $user_id);
            $statement->bindParam(':post_id', $post_id);
            $statement->execute();
        } else {
            $statement = "
            INSERT INTO blogpostlikes (user_id, post_id) VALUES (:user_id, :post_id);
            ";
            $statement = $db->prepare($statement);
            $statement->bindParam(':user_id', $user_id);
            $statement->bindParam(':post_id', $post_id);
            $statement->execute();
        }
    } catch (PDOException $th) {
        return 'ERROR';
    }
}

$post_id = $_GET['post_id'];
$user_id = $_GET['user_id'];
$isLiked = $_GET['isLiked'];

header('Location: post.php?id=' . $post_id);
