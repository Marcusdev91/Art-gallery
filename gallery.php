<?php
require_once 'header.php';
require_once 'includes/conn.inc.php';

?>


    

    
    <h2>Gallery</h2>
    <section class='gal_container'>
    <?php
   
    $q = $db->query('SELECT * FROM galleryart ORDER BY  id desc');
    while ($row = $q->fetch()) {
        $title = $row['gallery_title']; 
        $body = $row['gallery_body']; 
        $date = $row['gallery_date']; 
        $image = $row['gallery_image'];
        $id = $row['id']; 
       
    print"
  
    
        <div class='card'>
          
                <img class='gal_img' src=$image alt='Bingo Kondowe'>
            <div class='gal_body'>
                <h3>$title</h3>
                <p>$body</p>
            </div>
        </div>
    

        "  ;
    }    
     ?>
     </section>
  


       

    <script src="main.js"></script>
</body>
</html>