<?php include '../header.php'; ?>
<title>Cock O' Barton | Register With Us</title>
<?php include '../nav.php'; ?>
<div class="container register-with-us">
  <div class="row mb24">
    <div class="col-lg-9">
      <h1 class="mb24">Register with us</h1>
      <div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span>Registration successful. We will get in touch soon!</strong></div>
      <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong>Something went wrong! Please refresh the page and try again.</strong></div>
      <form id="register" role="form" action="../scripts/register.php" class="form-horizontal" method="post" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
        <div class="form-group col-lg-12">
          <label for="InputName">Your Name</label>
          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
        </div>
        <div class="form-group col-lg-12">
          <label for="InputEmail">Your Email</label>
          <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
        </div>
        <div class="form-group col-lg-12">
          <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <div class="col-lg-12 col-sm-6 december mt24 nopadding"> <a href="#">
        <h1>December at the COB</h1>
        <h4>Click to view and download our Advent calender to ensure that you never miss a date</h4>
        <img class="shake" src="../images/banner_r_1.png" /> </a> </div>
      <div class="col-lg-12 col-sm-6 christmas nopadding mt24 mb24"> <a href="#">
        <h1>Christmas<br/>
          2014</h1>
        <h4>Available from Wednesday 19th November<br />
          Festive Package<br />
          &pound;28.50 for three courses from 12 noon till 9pm Tuesday to Saturday<br />
          Do you have a large party and fancy exclusive use of the venue?</h4>
        <h3>Choose a Monday and have exclusive use of the whole venue with no hire charge!</h3>
        <img class="shake" src="../images/banner_r_1.png" /> </a> </div>
    </div>
  </div>
</div>
</div>
<?php include '../footer.php'; ?>
