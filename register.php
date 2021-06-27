<?php

session_start();
$conn = new mysqli("localhost","root","","satya_sai");

if(isset($_POST['reg'])){

    $trainingc = $_POST['trainingc'];
    $name = $_POST['name'];
    $father = $_POST['father'];
    $paddress = $_POST['paddress'];
    $taddress = $_POST['taddress'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $vclas = $_POST['vclass'];
    $idproof = $_POST['idproof'];
    $idno = $_POST['idno'];
    $mark = $_POST['idmark'];

    $uploads_dir = 'uploads';
    $name1= time().$_FILES['pic']['name'];
    $name2= time().$_FILES['idfile']['name'];
    if(move_uploaded_file($_FILES['pic']['tmp_name'], $uploads_dir."/".$name1)){

        
        if(move_uploaded_file($_FILES['idfile']['tmp_name'], $uploads_dir."/".$name2)){
            $query = "INSERT INTO `registrations` ( `training_center`, `name`, `photo`, `father`, `p_add`, `t_add`, `phone`, `dob`, `class`, `id_proof`, `id_no`, `id_photo`, `body_mark`,`date`) VALUES ('$trainingc','$name','$name1','$father','$paddress','$taddress','$phone','$dob','$vclas','$idproof','$idno','$name2','$mark',NOW() )";

              $run =  mysqli_query($conn,$query);
              if($run){
                  header("location:index.php");
              }

        }

    }

    print_r($_POST);

}


?>