
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h1>Hello!</h1>
    </body>
</html>


<!-- comment --><!--<!doctype html>
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
                echo "Submit Clicked"
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
                ?>
            </tbody>
        </table>
    </body>
</html>-->