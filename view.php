<html>
    <head>
        <title>php테스트</title>
    </head>
    <body>
        <?php
        $file_dir = 'c:\xampp\htdocs\c04\s45\images\\';
        //windows
//$file_dir='/Applications/XAMPP/xamppfiles/htdocs/C04/S45/images/';
//Mac
//$file_dir='/opt/lampp/htdocs/C04/S45/images/';
//Linux
//$file_dir=$file_dir.$_FILES["uploadfile"]["name"];

        $file_path = $file_dir . $_FILES["uploadfile"]["name"];
        if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $file_path)) {
            $img_dir = "images/";
            $img_dir = $img_dir . $_FILES["uploadfile"]["name"];
            $size = getimagesize($file_path);
            ?>
            파일 업로드를 완료했습니다.<br>
            <img src="<?= $img_path ?>"<?$size[3]?>><br><!-- comment -->
            <b><?= $_POST["comment"] ?></b><br>


    <?php
} else {
    ?>
            정상적으로 업로드되지 않았습니다.<br>
            <?php
        }
        ?>
    </body>
</html>


