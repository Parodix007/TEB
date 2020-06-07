<?php
    session_start();
    $message = "<p class='alert alert-info'>Wprowadz dane</p>";
    /*if($_POST["ID"] && $_POST["Person"] && is_numeric($_POST["ID"]) && strlen($_POST["ID"]) == 6 && intval($_POST["ID"]) % 7 == 0){
    echo $message = "<p class='alert alert-success'>Oddany glos</p>";
    }else{
    echo $message;
    }
    */

    function dbHandle($x, $y){
        $dbconn = mysqli_connect("localhost", "sebastian", "dupadupa", "sebastian_") or die("<p class='alert alert-danger'><span class='alert-heading'>Blad...</span></p>");

        $kwerenda = "INSERT INTO _vote (voter_id, choosenOption) VALUES ('$x', '$y')";

        if(mysqli_query($dbconn, $kwerenda)){
            $_SESSION['mess'] = "<p class='alert alert-success'><span class='alert-heading'>GLOS ODDANY DZIEKUJEMY!</span></p>";
        }else{
            $_SESSION['mess'] = "<p class='alert alert-danger'><span class='alert-heading'>Cos poszlo nie tak...</span></p>";
        }
        mysqli_close($dbconn);
    };

    if($_POST["ID"] && $_POST["Person"]){
        header('Location:index.php');
        return dbHandle($_POST["ID"], $_POST["Person"]);
    }else{
        header('Location:index.php');
        $_SESSION['mess'] = $message;
    };
?>