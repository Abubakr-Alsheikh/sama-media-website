<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sama Media</title>
    <link rel="stylesheet" href="styles/all.min.css" />
    <link rel="stylesheet" href="styles/v4-shims.min.css" />
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/index.css" />
  </head>

  <body>
    <!-- header -->
    <header class="f-around">
      <div class="logo"></div>
      <nav>
        <a href="index.php" id="active">Home</a>
        <a href="services.php">services</a>
        <a href="projects.php">projects</a>
        <a href="customers.php">customers</a>
        <a href="team.php">team</a>
        <a href="contact.php">contact</a>
      </nav>
      <div class="icons">
        <a href="https://www.facebook.com/SamaMedia.co?mibextid=ZbWKwL"
          ><i class="fa fa-facebook"></i
        ></a>
        <a href="#"><i class="fa fa-telegram"></i></a>
      </div>
      <div class="BTNSIDER" id="BTNSIDER"></div>
    </header>
    <div class="font"></div>
    <aside id="sider">
      <div class="logo"></div>
      <nav>
        <a href="index.php" id="active">Home</a>
        <a href="services.php">services</a>
        <a href="projects.php">projects</a>
        <a href="customers.php">customers</a>
        <a href="team.php">team</a>
        <a href="contact.php">contact</a>
      </nav>
      <div class="icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-telegram"></i></a>
      </div>
    </aside>

    <!-- content -->
    <div class="container f-evenly main" style="padding-top: 100px">
      <div class="text">
        <h2>Hello..</h2>
        <h1>Sama Media</h1>
        <h3>Graphic Design & Motion Company</h3>
        <div class="links">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-telegram"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-whatsapp"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-pinterest"></i></a>
        </div>
      </div>
      <div class="img">
        <img src="images/home.png" alt="" />
      </div>
    </div>

    <!-- services -->
    <div class="serves container f-evenly" id="serves">
      <h2>Our services</h2>
      <div class="card">
        <div class="serv">
          <a href="services.php?#design">
            <img src="images/flex-v.png" alt="" class="img200"
          /></a>
          <h3>Design</h3>
        </div>
        <div class="serv">
          <a href="services.php?#print">
            <img src="images/logo-v.png" alt="" class="img200"
          /></a>
          <h3>Print</h3>
        </div>
        <div class="serv">
          <a href="services.php?#execut"
            ><img src="images/card-v.png" alt="" class="img200"
          /></a>
          <h3>Execut</h3>
        </div>
      </div>
      <a href="projects.php"> <button>Show works</button></a>
    </div>

    <!-- about -->
    <div class="projects container f-evenly">
      <h2>Our latest work</h2>
      <?php 
        include "conn.php";
            if($con_mysqli){
              $query="SELECT * FROM projects order by p_id desc limit 3";
              $result=mysqli_query($con_mysqli,$query);
              $row_com=mysqli_num_rows($result);
              if($row_com>0) { 
                while($data_main=mysqli_fetch_assoc($result)){ ?>
                  <div class="project f-center shad-bx">
                    <img src="images/<?php echo $data_main["p_image"];?>" alt="">
                  </div>
                <?php
                }
              }
            }
            else{
              echo 'fales';
            }
      ?>
    </div>

    <!-- footer -->
    <footer>
      <div class="footer" style="background-image: url('images/footer-1.jpg')">
        <div class="links">
          <a href="index.php" id="active">Home</a>
          <a href="services.php">services</a>
          <a href="projects.php">projects</a>
          <a href="customers.php">customers</a>
          <a href="team.php">team</a>
          <a href="contact.php">contact</a>
        </div>
        <div class="logo">
          <img src="images/logo-colors.png" alt="logo" />
          <p>Sama Media</p>
        </div>
        <div class="contact">
          <h3>Phone Numbers</h3>
          <p class="phone">+ 963 945 980 787</p>
          <p class="phone">+ 963 982 473 434</p>
          <h3>Social Media</h3>
          <span>
            <a href="https://www.facebook.com/SamaMedia.co?mibextid=ZbWKwL">
              <i class="fa fa-facebook">&nbsp; Facebook</i></a
            >
            <a href=""> <i class="fa fa-instagram"> &nbsp;Instagram</i></a>
            <a href=""> <i class="fa fa-whatsapp"> &nbsp;Whatsapp</i></a>
          </span>
        </div>
        <i class="copyright">All copyright saved &copy;</i>
      </div>
    </footer>
    <a class="scroll" href="#">
      <i class="fa fa-arrow-up"></i>
    </a>
    <script src="scripts/script.js"></script>
  </body>
</html>
