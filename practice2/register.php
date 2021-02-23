<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Login</title>

  </head>
  <body style="background:#CCC">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="card bg-dark mt-5">
            <div class="card-title bg-primary text-white">
              <h3 class = "text-center">Login</h3>
            </div>


            <?php
            //NO.1
              if(@$_GET['Empty'] == true)
              {
            ?>
              <div class="alert-light text-danger text-center">
                <?php
                  echo $_GET['Empty'];
                 ?>

              </div>
            <?php
              }
              // NO.1
             ?>



             <?php
             //NO.2
               if(@$_GET['Invalid'] == true)
               {
             ?>
               <div class="alert-light text-danger">
                 <?php
                   echo $_GET['Invalid'];
                  ?>

               </div>
             <?php
               }
               // NO.2
              ?>

              <?php
              //NO.3
                if(@$_GET['Exist'] == true)
                {
              ?>
                <div class="alert-light text-danger">
                  <?php
                  echo $_GET['Exist'];
                  echo "<script>alert('중복된 아이디가 있습니다.');</script>";
                   ?>

                </div>
              <?php
                }
                // NO.3
               ?>

            <div class="card-body">
              <form class="" action="reg.php" method="post">
                <input type="text" name="Uname" placeholder = "User" class = "form-control mb-3">
                <input type="text" name="Password" placeholder = "Password" class = "form-control mb-3"  value="">
                <input type="text" name="Email" placeholder = "Email" class = "form-control mb-3">
                <button class = "btn btn-success mt-3" name="Register">Register</button>
              </form>

            </div>

          </div>

        </div>

      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
