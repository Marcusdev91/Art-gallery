    <?php
    require_once "../header.php";
    require_once "conn.inc.php";
   
    if(isset($_POST['save'])){
            $accepted_exts = array('png','jpg','jpeg','gif');
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target_dir ="../images/${file_name}";
            $actual_dir = "images/${file_name}";

            $file_ext = explode('.',$file_name);
            $file_ext = strtolower(end($file_ext));


          if(!empty($_POST['title'])){
            $At = $_POST['title'];
           

            $title = filter_var($At, FILTER_SANITIZE_STRING);
         

          }else{
            $titleM = '<p style="color:red;">Your blog requires a title</p> ';
          }

          if( !empty($_POST['body']) ){
            $Ab = $_POST['body']; 

            $body = filter_var($Ab, FILTER_SANITIZE_STRING);
          }else{
            $bodyM = '<p style="color:red;">fill in this body field</p> ';
          }
          if( !empty($_FILES['upload']['name'])){
            if(in_array($file_ext, $accepted_exts)){
                if($file_size <= 1000000){
                    move_uploaded_file($file_tmp, $target_dir);

            $fileM = '<p style="color:green;">File uploaded</p> ';
            $affectedRows = $db->exec("INSERT INTO galleryart (gallery_title,gallery_body,gallery_image) VALUES('$title','$body','$actual_dir')");
            header("Location: ../gallery.php");

                }else{
                    $fileM = '<p>File size too big</p> ';
                }

            }else{
                $fileM = '<p style="color:red;"> Choose a valid file please</p> '; 
            }
          }else{
            $fileM = '<p style="color:red;"> Choose a file please</p> ';
          }
        
   
    }
?>
   <div class="form">  
       
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  enctype="multipart/form-data"> 
<h1>Add content</h1>
<ul class="contact_ele">
    <label>Title</label>
  <?php echo $titleM ?? null; ?>
    <input type='text' name='title' ><br/>
    <label>Body</label>
    <?php echo $bodyM ?? null; ?>
    <textarea name='body' ></textarea><br/>

    <?php echo $fileM ?? null; ?>
    <input type='file' name='upload' ><br/>
  
    <input type="hidden" name="success">
    <button type='submit' name='save'>Save</button>
    <?php echo $Done ?? null; ?>
</ul>
</form>
</div>



 <script type="text/javascript" src="../main.js"></script>
</body>