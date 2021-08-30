<!doctype html>
<html lang="ko">

    <head>
        <meta charset="utf-8">
        <title>Employees</title>
        <style>
            body {
                font-family: Consolas, monospace;
                font-family: 12px;
            }
            table {
                width: 100%;
            }
            th, td {
                padding: 10px;
                border-bottom: 1px solid #dadada;
            }
        </style>
    </head>
    <body>

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>title_name</th>
                    <th>date</th>
                </tr>
            </thead>
            <tbody>


                <?php
                /* $title = $_POST['title'];
                $file = $_FILE['file'];

                $jb_conn = mysqli_connect('203.234.29.13', 'gcyang', 'ScE1234**', 'gcyangdb');

                $query = "insert into file(`title`,`title_name`,`date`)values('$title','$file',NOW());";
                $query_result = mysqli_query($jb_conn, $query);

                $jb_sql = "SELECT * FROM file limit 20";
                $jb_result = mysqli_query($jb_conn, $jb_sql);
//id는 primary key로 자동으로 추가된다.
                
                mysqli_query($jb_conn, $query);
                echo '<h1>Success!</h1>';
                
                if ($query_result) {
                    while ($jb_row = mysqli_fetch_array($jb_result)) {
                        echo '<tr><td>' . $jb_row['id'] . '</td><td>' . $jb_row['title'] . '</td><td>' . $jb_row['title_name'] . '</td><td>' . $jb_row['date'] . '</td></tr>';
                    }
                } else {
                    echo "Error: " . $jb_sql . "<br>" . mysqli_error($jb_conn);
                }*/
    $currentDirectory = getcwd();
    $uploadDirectory = "/uploads/";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed 

    $fileName = $_FILES['the_file']['name'];
    $fileSize = $_FILES['the_file']['size'];
    $fileTmpName  = $_FILES['the_file']['tmp_name'];
    $fileType = $_FILES['the_file']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName); 

    if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
      }

      if ($fileSize > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
          echo "The file " . basename($fileName) . " has been uploaded";
        } else {
          echo "An error occurred. Please contact the administrator.";
        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }
                ?>
            </tbody>
        </table>
    </body>
</html>