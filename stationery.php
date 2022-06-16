<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index4.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Food Donation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="topnav">
    <a class="logo_nav" href="">
      <img class="logoform" src="Logo.jpeg">
    </a>
    <a class="active" href="#contact"><i class="fa fa-whatsapp" style="font-size:48px;color:green"></i></a>
    <a class="active" href="index4.html">About</a>
    <a class="active" href="index4.html">Home</a>
  </div>

  <div class="form">
    <h1 class="Food">Stationary Donation</h1>
  </div>

  <div class="row">
    <div class=" col-lg-6 col-md-12">
      <form action="stationeryconn.php" method="post">
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" name="username" value="<?php echo($_SESSION["username"]); ?>" disabled="disabled">
          </div>

          <div class="col">
            <input type="text" class="form-control" placeholder="First name" name="firstname" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Last name" name="lastname" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
          </div>

          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="99999 99999" pattern="[0-9]{10}">
          </div>
        </div>

        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required>
        </div>

        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2" required>
        </div>


        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputState">How Do You Wish To Donate?</label>
            <select id="inputState" class="form-control" required aria-required="true" name="how">
              <option selected="" disabled="" hidden="" value="">Choose</option>
              <option value="Pickup">Pickup</option>
              <option value="Drive (Mass Collection)">Drive (Mass Collection)</option>
              <option value="Share with Foundation">Share with Foundation</option>
              <option value="Drop Yourself">Drop Yourself</option>
            </select>





            <div class="form-row">

                  <label for="inputState">Book Type:</label>
                  <div class=" book form-group col-md-4">
                <select id="inputState" class="form-control" required aria-required="true" name="type">
                  <option selected="" disabled="" hidden="" value="">Select Book Type</option>
                   <option value="Educational">Educational</option>
                   <option value="Biography">Biography</option>
                  <option value="Novels">Novels</option>
                 <option value="Random">Random</option>
            </select>
          </div>
        <div class="form-group">
          <label for="time">Date for pickup</label>
          <input type="date" class="form-control" id="time" name="time" placeholder="dd-mm-yy">
        </div>
    </div>
            <div class="termsbox">
              <div class="form-group" style="font-size: 11px !important; margin-bottom: 30px; width: 90%; display: inline-flex;">
                <input class="formcheckbox1" onclick="checkboxtest()" type="checkbox" id="checkbox1" value="I agree." name="box1" required />
                <p class="checkbox-text">By checking this box, I confirm the quality of books to be in normal condition.</p>
              </div>
            </div>

          </div>

        </div>

        <button type="submit" class="btn btn-primary donatebtn donatebutton" name="save">Donate</button>


      </form>


      <br><br>
    </div>

    <div class="col-lg-6 col-md-12" >
      <img class="img1" src="stationary.jpeg" alt="donation time img">
    </div>

  </div>
  </div>
  <br>
  <div class="bottom">

    <a class="active2" href="#contact">Contact on :xxxxxxxx</a>
    <p>BLESSTHEE IS HERE TO HELP YOU :)</P>
  </div>
</body>

</html>
