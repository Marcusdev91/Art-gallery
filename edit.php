<?php
require_once 'header.php';
require_once 'includes/conn.inc.php';
if(isset($_SESSION['username'])){
    print "<nav class='addnav'><p style='margin-left:2vh; '>Add articles and content</p> <a href='includes/add.inc.php?'><button>add</button></a></nav>";
   
  
}else{
   header('location:login.php');
}



?>
<body>
    
 
    <section class="gal_container">
   
    
    <h2>Gallery</h2>
        <?php
           
        ?>
    
    <?php
    $q = $db->query('SELECT * FROM galleryart ORDER BY  id desc');
    while ($row = $q->fetch()) {
        $title = $row['gallery_title']; 
        $body = $row['gallery_body']; 
        $date = $row['gallery_date']; 
        $image = $row['gallery_image'];
        $id = $row['id']; 
    print"
    <article class='card'>
            
          <img src='$image' class='gal_img'  alt='grain'>
          <span class='title'><h3>$title.</h3></span>
          <p><i> $date</i></p>
          <span class='gal_body' name='body'> 
          $body
          </span> 
          <a onClick=\"javascript: return confirm('Please confirm deletion');\" href='includes/delete.inc.php?dataid=".$id." ' name='delete' class='delete'  ><button >Delete</button></a>
          </article>
        "  ;
    }    
     ?>
          
    </section>


       

    <script src="main.js"></script>
</body>
</html>