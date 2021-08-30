<?php
$jb_conn = mysqli_connect('203.234.29.13', 'gcyang', 'ScE1234**', 'gcyangdb');
$jb_sql = "SELECT * FROM file";
$jb_result = mysqli_query($jb_conn, $jb_sql);

 $query = "
                delete table [file] where [$contect];
                ";
 //conntect함수를 만들어 선택된 파일을 삭제할 수 있도록 만든다.
 
?>