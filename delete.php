<?php 
    include 'connect.php';
    if(isset($_GET['deleteid'])){ // avec GET on peut accéder aux paramètres d'un url
        $id=$_GET['deleteid']; // on prend le deleteid de l'url

        $sql="delete from `crud` where id=$id"; // on lance une requête sql qui delete la ligne de la table crud où l'id est celui sélectionné
        $result=mysqli_query($con, $sql);
        if($result){
            //echo "deleted successfully";
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>