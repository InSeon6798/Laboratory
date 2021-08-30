To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$conn = mysqli_connect("localhost", "gcyang", "ScE1234**", "Project"); // 데이터베이스 연결
$sql = "SELECT * FROM `file`";

$jb_sql = "select*from ScE1234** LIMIT 20";
$jb_result = mysqli_squery($jb_conn, $jb_sql);
?>
<html>
    <head>
        <title>파일 업로드 테스트</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    </body>
</html>
