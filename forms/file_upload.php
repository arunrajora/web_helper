<?php
    $myfileTag="myfile";
   if(isset($_FILES[$myfileTag])){
      $errors= array();
      $file_name = $_FILES[$myfileTag]['name'];
      $file_size = $_FILES[$myfileTag]['size'];
      $file_tmp = $_FILES[$myfileTag]['tmp_name'];
      $file_type = $_FILES[$myfileTag]['type'];
      $file_ext=strtolower(end(explode('.',$_FILES[$myfileTag]['name'])));
      
      $expensions= array("jpeg","jpg","png","webp");
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed.";
      }  
      if($file_size > 10000000) {
         $errors[]='too big file';
      }
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,__DIR__.'\\uploads\\'.rand().$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "myfile" />
         <input type = "submit"/>
            
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
            
      </form>
      
   </body>
</html>
