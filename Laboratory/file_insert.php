
<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=gcyangdb', 'subadmin', 'wjstks`12');

 $query = "
 INSERT INTO events 
 (title,file,date) 
 VALUES (:title, :file, :date)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':file' => $_POST['file'],
   ':date' => $_POST['date']
  )
 );


?>
