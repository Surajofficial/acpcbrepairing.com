<?php
include './common/conn.php';
// cheking all field fill or not 
if (empty($_POST['email']) || empty($_POST['pass'])) {
    echo "input all field";
} else if (!isset($_POST['pass']) || $_POST['pass'] == '') {
    echo "input all field";
} else {
    $email = $_POST['email'];
    $pass =  $_POST['pass'];
    $sql = $conn->prepare("SELECT * FROM user WHERE email = ? AND pass = ?");
    $sql->bind_param("ss", $email, $pass);
    $sql->execute();
    $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    //  checking user exit in db
    if (count($result) > 0) {
        // cheking rember chek or not 
        //   updating utk 
        $id = $result['0']['id'];
        $utk = md5($id . $_POST['pass']);
        $query =  "UPDATE `user` SET  `utk`= '$utk' WHERE `id`= '$id'";

        if ($result = $conn->query($query)) {
            //  seting cookie 
            setcookie("utk", $utk, time() + (3600 * 24));
            echo 1;
        } else {
            echo "somthing went wrong";
        }
    } else {
        echo 2;
    }
}
