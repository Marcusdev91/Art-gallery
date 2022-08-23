<?php

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=crudpage','root','');
    $dbi = new PDO('sqlite:/tmp/crudpage.db');
    $dbi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // $affectedRows = $db->exec("INSERT INTO cms (cms_Title,cms_Body) VALUES('Stress','Everything about stress')");
    // Do some stuff with $db here

   

     
    } catch (PDOException $e) {
        print "Couldn't insert a row: " . $e->getMessage();
        print "Couldn't connect to the database: " . $e->getMessage();
        
    }