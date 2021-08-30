<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>연구실 홈페이지</title>
        <style>
            * { margin: 0; padding: 0; 
                box-sizing: border-box; 
            }
            body { font-family: "돋움"}
            a:link, a:visited, a:hover, a:active {
                text-decoration: none;
                color: #000000;
            }
            li { list-style-type: none; }
            /* 기본 CSS, 스마트 폰 CSS */
            header {
                position: relative;
                height: 70px;
            }
            header .logo {
                position: absolute;
                top: 23px;
                left: 20px;
                font-size: 1.3em;
            }
            header .logo span {
                color: #1f5abb;
                font-weight: bold;
            } 
            header .menu {
                display:none;
                position: absolute;
                top: 20px;
                right: 20px;
            }
            header .menu_btn {
                width:20px;
                position: absolute;
                top: 20px;
                right: 20px;
            }
            header .menu_btn li {
                border-bottom: solid 2px #000000;
                padding: 3px 0;
            }
            .sub_image { 
                background: url("./img/sub_reservation.jpg");
                background-position: top center;
                background-repeat: no-repeat;
                height: 150px;
                text-align: center;
                color: #a6b7d0;
            }
            .sub_image h1 { padding-top: 40px; font-size: 2.0em; font-weight: normal; }
            .sub_image span { 
                display: block;
                margin-top: 10px;
            }
            .reservation .calendar {
                margin-top: 40px;
                padding-top: 50px;
                background-color: #d0d1e1;
                text-align: center;
                color: #444444;
            }
            .reservation .calendar h4 { font-weight: normal; }
            .reservation .calendar .month {
                margin-top: 20px;
                font-size: 1.2em;
            }
            .reservation .calendar .month span { font-size: 1.2em; }
            .reservation table, .reservation td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            .reservation table {
                width: 90%;
                margin: 20px auto;
                margin-bottom: 50px;
                font-size: 0.9em;
                background-color: #ffffff;    
                color: #000000;
                text-align: left;
            }
            .reservation tr { height: 100px; }
            .reservation tr:first-child {
                height: 30px;
                text-align: center;
            }
            .reservation td {
                vertical-align: top;
                padding: 5px;
            }
            .reservation tr td:first-child {
                color: #ff0000;
                width: 14.2857%;
            }
            .reservation tr td:nth-child(2) { width: 14.2857%; }
            .reservation tr td:nth-child(3) { width: 14.2857%; }
            .reservation tr td:nth-child(4) { width: 14.2857%; }
            .reservation tr td:nth-child(5) { width: 14.2857%; }
            .reservation tr td:nth-child(6) { width: 14.2857%; }
            .reservation tr td:last-child { width: 14.2857%; }
            .reservation .info { padding: 30px; }
            .reservation .info h2 {
                margin: 20px 0 20px 0;
                border-left: solid 8px #444444;
                padding-left: 10px;
            }
            .reservation .info ul { margin-bottom: 40px; }
            .reservation .info li { margin-top: 12px; }
            .reservation .info li span {
                display: block;
                margin-top: 20px;
                color: green;
            }
            .reservation::after {
                content: "";
                clear: both;
                display: block;
            }
            footer {
                color: #ffffff;
                background-color: #292c32;
                padding-bottom: 80px;
            }
            footer .box div { padding: 60px 0 0 20px; }
            footer .box div:first-child h1 { margin-top: 20px; }
            footer .box div:nth-child(2) li {
                display: inline-block;
                margin-right: 5px;
            }
            footer .box div:nth-child(2) p { 
                margin-top: 20px; 
                line-height: 150%;
            }  
            footer .box div:last-child {
                text-align: right;
                padding-right: 20px;
            }
            footer::after {
                content: "";
                clear: both;
                display: block;
            }
            [class*="col_"] {  float: left; }
            .col_s_1 { width: 8.33%; }   .col_s_2 {  width: 16.66%;  }
            .col_s_3 { width: 25%; }     .col_s_4 {  width: 33.33%;  }
            .col_s_5 { width: 41.66%; }  .col_s_6 {  width: 50%;  }
            .col_s_7 { width: 58.33%; }  .col_s_8 {  width: 66.66%;  }
            .col_s_9 { width: 75%; }     .col_s_10 {  width: 83.33%;  }
            .col_s_11 { width: 91.66%; } .col_s_12 { width: 100%; }
            @media only screen and (min-width: 768px) {
                /* 테블릿 */
                .col_m_1 { width: 8.33%; }   .col_m_2 { width: 16.66%; }
                .col_m_3 { width: 25%; }     .col_m_4 { width: 33.33%;  }
                .col_m_5 { width: 41.66%; }  .col_m_6 { width: 50%; }
                .col_m_7 { width: 58.33%; }  .col_m_8 { width: 66.66%; }
                .col_m_9 { width: 75%; }     .col_m_10 { width: 83.33%; }
                .col_m_11 { width: 91.66%; } .col_m_12 { width: 100%; }
                .box { 
                    max-width: 1170px; 
                    margin: 0 auto; 
                    position: relative;        
                }
                .sub_image { height: 220px; }
                .sub_image h1 { padding-top: 75px; }
                .reservation { margin: 40px 0 90px 0; }
                .reservation .info { margin-top: 20px; }
            }
            @media only screen and (min-width: 1200px) {
                /* 데스크톱 */
                .col_1 { width: 8.33%; }   .col_2 { width: 16.66%; }
                .col_3 { width: 25%; }     .col_4 { width: 33.33%; }
                .col_5 { width: 41.66%; }  .col_6 { width: 50%; }
                .col_7 { width: 58.33%; }  .col_8 { width: 66.66%; }
                .col_9 { width: 75%; }     .col_10 { width: 83.33%; }
                .col_11 { width: 91.66%; } .col_12 { width: 100%; }
                header .menu_btn { display: none; } 
                header .menu { display: block; } 
                header .menu li {
                    display: inline-block;
                    margin: 5px 0 0 50px;
                }
                .box {
                    max-width: 1170px;
                    margin: 0 auto;
                    position: relative;
                }
                .sub_image { height: 350px; }
                .sub_image h1 { padding-top: 130px; }
                .reservation { margin: 40px 0 90px 0; }
                .reservation .info { margin-top: 20px; }
            }



            /*just bg and body style*/
            .container{
                background-color:#1E2832;
                padding-bottom:20px;
                margin-top:10px;
                border-radius:5px;
            }
            .center{
                text-align:center;  
            }
            #top{
                margin-top:20px;  
            }
            .btn-container{
                background:#fff;
                border-radius:5px;
                padding-bottom:20px;
                margin-bottom:20px;
            }
            .white{
                color:white;
            }
            .imgupload{
                color:#1E2832;
                padding-top:40px;
                font-size:7em;
            }
            #namefile{
                color:black;
            }
            h4>strong{
                color:#ff3f3f
            }
            .btn-primary{
                border-color: #ff3f3f !important;
                color: #ffffff;
                text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
                background-color: #ff3f3f !important;
                border-color: #ff3f3f !important;
            }

            /*these two are set to not display at start*/
            .imgupload.ok{
                display:none;
                color:green;
            }
            .imgupload.stop{
                display:none;
                color:red;
            }


            /*this sets the actual file input to overlay our button*/ 
            #fileup{
                opacity: 0;
                -moz-opacity: 0;
                filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0);
                width:200px;
                cursor: pointer;
                position:absolute;
                left: 50%;
                transform: translateX(-50%);
                bottom: 40px;
                height: 50px;
            }

            /*switch between input and not active input*/
            #submitbtn{
                padding:5px 50px;
                display:none;
            }
            #fakebtn{
                padding:5px 40px;
                color: black;

            }


            /*www.emilianocostanzo.com*/
            #sign{
                color:#1E2832;
                position:fixed;
                right:10px;
                bottom:10px;
                text-shadow:0px 0px 0px #1E2832;
                transition:all.3s;
            }
            #sign:hover{
                color:#1E2832;
                text-shadow:0px 0px 5px #1E2832;
            </style>
        </head>


        <body>
          
            <header>
                <div class="box">
                    <h1 class="logo"><a href="First_page.php"><span>연구실</span> 홈페이지</a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="introduce.php">연구실 소개</a></li>
                            <li><a href="file.php">논문자료</a></li>
                            <li><a href="site.php">관련 사이트</a></li>
                            <li><a href="all_labaratory.php">연구실적</a></li>
                        </ul>
                    </nav>
                    <ul class="menu_btn">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </header>
    </html>



    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <fieldset>
                <legend>파일 업로드</legend>
                <table>

                    <tr>
                        <td>제목 : <input type="text" name="title"/></td>
                    </tr>
                    <tr>
                        <td>등록일 : <input type="text" name="date"/></td>
                    </tr>

                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

                    <div class="container center">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="white">Custom File Upload</h1>
                                <p class="white">In this example, submit is allowed only in case the user uploads a valid image file.</p>
                            </div>
                        </div>

                        <form name="upload" method="post" action="#" enctype="multipart/form-data" accept-charset="utf-8">

                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 center">
                                    <div class="btn-container">
                                        <!--the three icons: default, ok file (img), error file (not an img)-->
                                        <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                                        <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                                        <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                                        <!--this field changes dinamically displaying the filename we are trying to upload-->
                                        <p id="namefile">Only pics allowed! (jpg,jpeg,bmp,png)</p>
                                        <!--our custom btn which which stays under the actual one-->
                                        <input type="file" id="btnup" class="btn btn-primary btn-lg" ></input>
                                        <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->

                                    </div>
                                </div>
                            </div>
                            <!--additional fields-->
                            <div class="row">			
                                <div class="col-md-12">
                                    <!--the defauld disabled btn and the actual one shown only if the three fields are valid-->
                                    <a href="file0.php">
                                        <input type="button" class="btn btn-default"  id="fakebtn" value="업로드" name="file"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </table>
            </fieldset>
            <?php
            // $myfile= $_GET["file"]["name"] 
//                    if ( file_exists("/var/www/html/upload".$myfile)){
//                     echo $myfile."라는 파일이 이미 존재합니다." ;  
//                    }
//                    else{
//                        copy($_GET["file"]["tmp_name"],"var/www/html/upload/".$myfile);
//                        echo"<img src='http://나의ip주소or도메인/upload/".$myfile.">";
//                    }
            ?>
        </body>
    </html>






