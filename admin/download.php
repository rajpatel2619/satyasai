<?php

if(isset($_POST['download-homework'])){

    
   $filename=$_POST['topic_name'];
   $contenttype = "application/force-download";
   header("Content-Type: " . $contenttype);
   header("Content-Disposition: attachment; filename=\"" . basename($filename) . "\";");
   readfile("../uploads/".$filename);
   exit();
}

?>