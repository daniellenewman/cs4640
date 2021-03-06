
<!-- by Johnny Choi and Sammy Hecht -->
<!-- page about the developers with a contact form -->



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../styles/mystyle.css">

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <title>About Us</title>
    <style>
      /* Style the input field */
      #myInput {
        padding: 20px;
        margin-top: -6px;
        border: 0;
        border-radius: 0;
        background: #f1f1f1;
      }
  </style>
  </head>
  <body>
    <header>


      <!-- navbar -->
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="./index.php">Random Movie Generator</a>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link" href="./index.php">Main</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./recently-released.php">Recently Released</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./user.php">User</a>
            </li>
          </ul>
        </div>
        <!-- Log In Forms/Button -->
        <?php
        // check for user and update html accordingly
          if (strlen($_COOKIE["user"]) < 2){
            echo '<form class="form-inline" id="login_form" method="POST">
              <div class="form-group">
                <label class="sr-only" for="email">Email:</label>
                <input name="email" type="email" class ="form-control" id="email" placeholder="Email" autofocus>
              </div>
              <div class="form-group">
                <label class="sr-only" for="pwd" >Password:</label>
                <input name="pwd" type="password" class="form-control" id="pwd" placeholder="Password">
              </div>
    <!--          <button type="button" class="btn btn-sm btn-primary login-button" id="login-submit">Submit</button>-->
              <input type="submit" name="submit" id="login-submit" value="Login"/>
              </form>
              <div>
                  <p id="login-error" style="color: red;"></p>
              </div>';

          } else {
            $user = $_COOKIE['user'];
            echo "<li class='nav-item'>
              <p class='nav-link' style='color: white;'>Welcome $user</p>
            </li>";
          }
         ?>

      </nav>

    </header>

    <div class="container">
      <!-- mission statement -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Mission Statement</h3>
                <p> The goal of this web application is to allow users to
                  find new and exciting movies to watch.  By filling out
                  a few forms, the user can select a movie within a given
                  genre, rating, and year.
                </p>
                <h5>Developers</h5>
            </div>
        </div>

        <!-- about the developers -->
        <div class="row" id="dev-grid">
          <div class="col text-center" id="developer">
            <img src="../images/blank-movie.jpg">
            <h3>Sammy Hecht</h3>
            <p>My name is Sammy Hecht, and I'm a third Year
              computer science major at the University of Virginia.</p>
          </div>
          <div class="col text-center" id="developer2">
            <img src="../images/blank-movie.jpg">
            <h3>Johnny Choi</h3>
            <p>My name is Johnny Choi, and I'm a third Year
              computer science major at the University of Virginia.</p>
          </div>
        </div>
        <div class="row" id="resp-row"></div>

    </div>






    <!-- import bootstrap and jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


  <form action="../backend/contact.php" id="contact-form" method="get">



      <div class="controls">

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_name">Firstname *</label>
                      <input id="form_name" type="text" name="name" class="form-control" value=""/>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_lastname">Lastname *</label>
                      <input id="form_lastname" type="text" name="surname" class="form-control" value=""/>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_email">Email *</label>
                      <input id="form_email" type="text" name="email" class="form-control" value=""/>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>

          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="form_message">Message *</label>
                      <input type="text" id="form_message" name="message" class="form-control" rows="4" value=""/>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div>
                    <p id="error" style="color: red;"></p>
              </div>
              <!-- submit the contact form to be emailed -->
              <div class="col-md-12">
                  <input type="submit" class="btn btn-success btn-send" id="contact-submit"/>

              </div>
          </div>
      </div>


    </form>




      <!-- Footer -->
    <footer class="page-footer font-small indigo">


      <div class="container">

            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">

              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase">
                  <a href="./index.php">Main</a>
                </h6>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase">
                  <a href="./recently-released.php">Recently Released</a>
                </h6>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase">
                  <a href="./about.php">About</a>
                </h6>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase">
                  <a href="./user.php">User</a>
                </h6>
              </div>
              <!-- Grid column -->

          </div>
    </div>



    </footer>


    <!--<script src="../scripts/about-scripts.js"></script>-->

    <script src="../scripts/login-script.js"></script>

  </body>
</html>
