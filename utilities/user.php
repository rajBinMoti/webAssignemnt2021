<?php
require_once 'db.php';

function do_login($user_name, $user_pass)
{
    try {
        $db_connection = db_connect();

        // $select_statment = "
        // SELECT * FROM User
        // WHERE user_name = :user_name AND user_pass = :user_pass";

        $select_statment = "
        SELECT * FROM User
        WHERE user_name = :user_name";

        $select_statment = $db_connection->prepare($select_statment);
        $select_statment->bindParam(":user_name", $user_name);
        // $select_statment->bindParam(":user_pass", $user_pass);

        $select_statment->execute();
        $user = $select_statment->fetch(PDO::FETCH_ASSOC);

        if (!empty($user)) {
            $user_pass_db = $user["user_pass"];
            return password_verify($user_pass, $user_pass_db) ?
                $user : null;
        }

        return null;
    } catch (PDOException $e) {
        // var_dump($e);
        // echo "DB connection failure";
        // exit();
    }
}

function do_register($user_name, $user_pass, $user_full_name)
{
    try {
        $db_connection = db_connect();


        $select_statment = "
        INSERT INTO user (user_name, user_full_name, user_pass)
        VALUES (:user_name, :user_full_name, :user_password);
        ";

        $select_statment = $db_connection->prepare($select_statment);
        $select_statment->bindParam(":user_name", $user_name);
        $select_statment->bindParam(":user_full_name", $user_full_name);
        $hashed = password_hash($user_pass, PASSWORD_DEFAULT);
        $select_statment->bindParam(":user_password", $hashed);

        $select_statment->execute();
        return "REGISTERED";
    } catch (PDOException $e) {
        echo "DB connection failure";
    }
}

function is_user_loggedin()
{
    session_start();
    $user = $_SESSION["_user"];
    return !empty($user);
}
