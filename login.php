    <?php
     require_once "header.php";
    require_once "includes/conn.inc.php";
    $input = array();   
    $input['username'] = $_POST['username'] ?? '';
    $submitted_password = $_POST['password'] ?? '';

            $eusername= filter_var($input['username'], FILTER_SANITIZE_STRING);
            $epassword = filter_var($submitted_password, FILTER_SANITIZE_STRING);
            if(isset($_POST['submit'])){
                
             
               
                if(empty($eusername)){
                 
               $emptyusername = "<p style='color:red'>*Fill this in please</p>";
              
    
    
            
         
        }

        if(empty($epassword)){
                 
            $emptypassword = "<p style='color:red'>*Fill the password</p>";
           
 
 
         
      
     }


        $stmt = $db->prepare('SELECT db_password FROM authenticationdb WHERE db_username = ?');
        $stmt->execute(array($_POST['username']));
        while($row = $stmt->fetch()){
            $submitted_password = $_POST['password'];
             $input = array();   
            $_SESSION['username'] = $_POST['username'];
          
            if($submitted_password == $row['db_password']){
                session_start();
                $_SESSION['username'];
                header('Location:edit.php');
               
                
            }else{
                    $error = 'Enter valid password or username';
                    
                    
            }

           
        }

       
                
    
    
            
        }
       
        

   

    ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="lform">
            <h2>Log in</h2>
            <section class="login">
                
                <label>Enter username</label>
                <?php echo $emptyusername ?? null; ?>
                <input class="finput" type="text" name="username">
                <label>Enter password</label>
                <?php echo $emptypassword ?? null; ?>
                <?php echo $error ?? null; ?>
                <input type="password" name="password" class="finput" type="password">
                <button name="submit" class="fbutton">Send</button>
            </section>
        </form>

</body>
<script src="main.js"></script>
</html>