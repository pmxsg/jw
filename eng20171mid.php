<!doctype>
<html>
<head>
    <meta charset="utf-8">
    <title>영어 2017년 2학년 1학기 중간고사</title>
    <style>
        .container{
            display: flex;
            flex-direction: column;
        }
        header{

            padding-left:20px;
            height:150px;
        }

        .navbar {
          overflow: hidden;
          background-color: black;
          position: relative ;
          top: 20px;
          width: 100%;
        }

        .navbar a {
          float: left;
          display: block;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }

        .navbar a:hover {
          background: #ddd;
          color: black;
        }
        footer{
            border-top:1px solid gray;
            padding:20px;
            text-align: center;
        }
        .content{
            display:flex;
        }

        .content aside{
            border-left:1px solid gray;
            flex-basis:100px ;
            flex-shrink:0;
            padding-left : 10px;
        }

        .tab {
          padding-top: 10px;
          float: left;
          border: 1px solid #ccc;
          background-color:skyblue;
          flex-basis: 100px;
          flex-shrink: 0;
          }

        /* Style the buttons inside the tab */
        .tab button {
          display: block;
          background-color: inherit;
          color: black;
          padding: 10px 10px;
          width: 100%;
          border: none;
          outline: none;
          text-align: center;
          cursor: pointer;
          transition: 0.3s;
          font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
          background-color: #ddd;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
          background-color: #ccc;
        }

        main{
            flex-basis : 1300px;
            flex-shrink:1;
            padding-left: 20px;
            column-count : 2;
            column-width: 600px;
            column-gap:50px;
            column-rule: 1px solid;
            line-height: 170%;
        }
        .jimun{
            width:500px;
            border:1px solid;
            padding-left : 1.8em;
            padding-right : 15px;
            padding-top : 10px;
            padding-bottom : 10px;
            margin-left : 30px;
            terx-align:justify;
          }
          .bogi{
            padding-left:20px;
          }

    </style>
</head>
<body>
    <div class="container">
        <header>
          <div>
            <img src="서초중학교 로고.PNG" style="vertical-align:middle;">
            <span style="font-size: 18px;font-weight: bold;">영어 2017년 2학년 1학기 중간고사 </span>
          </div>

          <div class="navbar">
              <a href="#">HOME</a>
              <a href="eng20211mid.html">2021년</a>
              <a href="eng20201mid.html">2020년</a>
              <a href="eng20191mid.html">2019년</a>
              <a href="eng20181mid.html">2018년</a>
              <a href="eng20171mid.html">2017년</a>
          </div>
        </header>
        <section class="content">
           <div class="tab">
              <button class="tablinks" onclick="openContents(event, '1')" id="defaultOpen">1 - 5</button>
              <button class="tablinks" onclick="openContents(event, '2')">6 - 9</button>
              <button class="tablinks" onclick="openContents(event, '3')">10 - 12 <br> 서술형1 </button>
              <button class="tablinks" onclick="openContents(event, '4')">13 - 16 <br> 서술형2,3 </button>
              <button class="tablinks" onclick="openContents(event, '5')">17 - 22</button>
              <button class="tablinks" onclick="openContents(event, '6')">23 - 26<br> 서술형4</button>
           </div>

            <main>
              <div id="1" class="tabcontent">

                    <p>
                      <?php
                        $file = file_get_contents('data/q1', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q2', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q3', true);
                        echo $file;
                       ?>
                    </p> <br><br>

                    <p>
                      <?php
                        $file = file_get_contents('data/q4', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q5', true);
                        echo $file;
                       ?>
                    </p>

              </div>

              <div id="2" class="tabcontent">
                    <p>
                      <?php
                        $file = file_get_contents('data/q6_7j', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q6', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q7', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q8', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q9', true);
                        echo $file;
                       ?>
                    </p>
              </div>

              <div id="3" class="tabcontent">
                    <p>
                      <?php
                        $file = file_get_contents('data/q10_12j', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q10', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q11', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q12', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/s1', true);
                        echo $file;
                       ?>
                    </p>
              </div>

              <div id="4" class="tabcontent">
                    <p>
                      <?php
                        $file = file_get_contents('data/q13_16j', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q13', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q14', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q15', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q16', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/s2', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/s3', true);
                        echo $file;
                       ?>
                    </p>

              </div>

              <div id="5" class="tabcontent">
                    <p>
                      <?php
                        $file = file_get_contents('data/q17_21j', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q17', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q18', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q19', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q20', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q21', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q22', true);
                        echo $file;
                       ?>
                    </p>

              </div>

              <div id="6" class="tabcontent">
                    <p>
                      <?php
                        $file = file_get_contents('data/q23', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q24', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q25', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/q26', true);
                        echo $file;
                       ?>
                    </p>

                    <p>
                      <?php
                        $file = file_get_contents('data/s4', true);
                        echo $file;
                       ?>
                    </p>

              </div>
            </main>
            <aside>
              <p>
                <?php
                  $file = file_get_contents('data/answer1', true);
                  echo $file;
                 ?>
              </p>
            </aside>
        </section>
        <footer>
            <a href="">pdf</a>
        </footer>
    </div>

    <script src="tab.js"> </script>
</body>
</html>
