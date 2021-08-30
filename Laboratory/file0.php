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

                table{
                    position: relative;
                    height: 70px;
                }
            }

        </style>
    </head>

    <body>
        <header>
            <div class="box">
                <h1 class="logo"><a href="First_page.php"><span>연구실</span> 홈페이지</a></h1>
                <nav>
                    <ul class="menu">
                        <li><a href="introduce.php">연구실 소개</a></li>
                        <li><a href="file0.php">논문자료</a></li>
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

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>file</title>
        <style>
            html,body{margin: 0; padding: 0; height: 100%}
            .header{width: 50%;height: 5%}
            .nav{width: 15%; height: 70%; float: left}
            .section{
                width: 70%; height: 70%; float: left;
            }
            .asied{width: 15%; height: 70%; float: left;}

            table{
                text-align:center;
                margin-left: 200px;
                margin-right: 200px;
            }
            submit{
                float: left;
                text-align: center;
                margin-left: 200px;
                margin-right: 30px;
            }
        </style>
    </head>
    <body>

        <header class="header"></header>
        <nav class ="nav"></nav>
        <section class="section">
            <div class="table">
                <table width = 600 height = 100 align = "center" border="1">
                    <thead>

                        <tr>
                            <th scope="col">번호</th>
                            <th scope="col">제목</th>
                            <th scope="col">파일</th>
                            <th scope="col">등록일</th>
                        </tr>

                    </thead>


        

                            <?php
                            $i = 0;
                            while ($i < 20) {
                                $i++;
                                ?>

                                <tr><td width="50"><?= $i ?></td><td width="200"></td><td></td><td></td></tr>

                                <?php
                            }
                            ?>

                </table>

                <center>
                    <div class="board_list_paging_01"> <img src='https://img.megastudy.net/campus/library/v2015/library/image/mypage/list_arrow_p.png' alt='이전 10개' class='btn_page prev'>
                        <a class='btn_pageNum current'><span>1</span></a> 
                        <a href='?clear=&refer=&curPage=2&curGroupPage=1&searchtype=&classgubun=&searchword=' class='btn_pageNum'><span>2</span></a>  
                        <a href='?clear=&refer=&curPage=3&curGroupPage=1&searchtype=&classgubun=&searchword=' class='btn_pageNum'><span>3</span></a>  
                        <a href='?clear=&refer=&curPage=4&curGroupPage=1&searchtype=&classgubun=&searchword=' class='btn_pageNum'><span>4</span></a>  
                        <a href='?clear=&refer=&curPage=5&curGroupPage=1&searchtype=&classgubun=&searchword=' class='btn_pageNum'><span>5</span></a>  
                        <a href='?clear=&refer=&curPage=6&curGroupPage=1&searchtype=&classgubun=&searchword=' class='btn_pageNum'><span>6</span></a>  
                        <a href='?clear=&refer=&curPage=7&curGroupPage=1&searchtype=&classgubun=&searchword=' class='btn_pageNum'><span>7</span></a>  
                        <img src='https://img.megastudy.net/campus/library/v2015/library/image/mypage/list_arrow_f.png' alt='다음 10개'  class='btn_page last'>
                        <a href="file.php">
                            <input type="button" value="파일등록"></i>
                        </a>

                    </div>
                </center>
            </div>
        </section>
        <aside class="aside"></aside>
    </body>
</html>

