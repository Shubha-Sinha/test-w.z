<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- Custom Css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

  <title> Contact</title>
</head>

<body>
  <!-- NAVBAR START -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5f5f5;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/brand.jpeg" alt="logo" width="30" height="24" class="d-inline-block align-top">
        Wedding Zone
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="indext.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="service.html">Engagement Photoshoot</a></li>
              <li><a class="dropdown-item" href="service.html">Pre Wedding Photoshoot</a></li>
              <li><a class="dropdown-item" href="service.html">Wedding Photoshoot</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="price.html">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galary.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- NAVBAR END -->

  <!-- PHP Data insert -->
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $subject = $_POST['subject'];
    $text = $_POST['text'];

    // mysql conect with php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dataBase = "wedding_zone";

    // create a conection
    $conn = mysqli_connect($serverName, $userName, $password, $dataBase);
    if (!$conn)
      die(mysqli_connect_error());
    else {
      // sql quary
      $sql = "INSERT INTO `contact_us` (`Name`,`Email`,`Gender`,`Subject`,`Message`)
    VALUES ('$name', '$email','$gender',' $subject','$text')";
      // insert data
      if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thank you!</strong> for your concern. We will contact you soon.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      } else {
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some issue and your entry was not submited succesfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
    }
    // close the conection.
    mysqli_close($conn);
  }
  ?>
  <!-- PHP End -->

  <!-- Contact Us Start -->
  <section class="main_div my-5">
    <div class="text-center">
      <h1 class="display-6">Contact Us</h1>
      <hr class="w-25 mx-auto" />
    </div>

    <!-- grid -->
    <div class="container my-5">
      <div class="row">
        <div class="col-sm-10 col-md-8 mx-auto">
          <form action="" method="POST">
            <div class="mb-3">
              <!-- name -->
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name">
              </div>
              <!-- email -->
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <!-- gender -->
            <div class="mb-3">
              <label for="exampleInputRadio" class="form-label">Gender :</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
            </div>
            <!-- sub -->

            <select class="form-select" aria-label="Default select example" name="subject">
              <option selected>Subject</option>
              <option value="Causal Inquiry">Causal Inquiry</option>
              <option value="Wedding">Wedding</option>
              <option value="Portfolio">Portfolio</option>
              <option value="Others">Others</option>
            </select>

            <!-- text area -->
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
            </div>
            <!-- check box -->
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- grid end -->

  </section>

  <!-- Our Details -->
  <section class="main_div my-5">
    <div class="text-center">
      <h1 class="display-6">Contact Details</h1>
      <hr class="w-25 mx-auto" />
    </div>

    <!-- grid -->
    <div class="container text-center  my-5 pt-3">
      <div class="row">
        <div class="col-sm-6">
          <h6><strong>Shubha Sinha</strong></h6>
          <p>Contact Number : +91 9614311058 <br>
            Email : Shubhasinha77@gmail.com</p>
        </div>
        <div class="col-sm-6">
          <p>
          <Address>Address : Sec-2, Salt Lake <br>
            Kolkata , West bengal <br> Pin : 700001
          </Address>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!--  Contact Us End -->

  <!-- Footer -->
  <footer class="text-center bg-light">

    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>