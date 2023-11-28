<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
   
   try{
    $db= new PDO("mysql:host=localhost;dbname=testo","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE emplois (
      id_empl INT AUTO_INCREMENT PRIMARY KEY,
      post VARCHAR(100)
    )");
    echo'table emplois creee';

    $db->exec("INSERT INTO emplois(post)
             VALUES('directeur'),
                   ('comptable'),
                   ('DG')
    ");
    echo'emplois creee';

   
   
   }
   catch(PDOException $e){
    echo'echec de la connexion'. $e-> getMessage();


   }
  
  
  
  
  ?>



 

 
    




</body>
</html>