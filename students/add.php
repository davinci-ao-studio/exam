<!DOCTYPE html>
<html>
<?php
require_once ('../assets/head.php');
 ?>
  <body>
    <?php require_once ('../assets/header.php'); ?>
    <div class="container">
      <div class="row col-md-6">
      <h1>Students</h1>
      <h2>Add New Student</h2>
      <form class="form-horizontal" action='crud.php' method="post">
        <div class="form-group">
          <label for="fname" class="col-xs-3 col-form-label">First name:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" id="fname" name="fname" placeholder="John">
          </div>
        </div>
        <div class="form-group">
            <label for="lname" class="col-xs-3 col-form-label">Last name:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" id="lname" name="lname" placeholder="Doe">
            </div>
        </div>
        <div class="form-group">
            <label for="ovnum" class="col-xs-3 col-form-label">OV Number:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" id="ovnum" name="ovnum" placeholder="99099099">
            </div>
        </div>
        <div class="form-group">
          <div class="offset-sm-4 col-sm-6">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </div>
      </form>
      </div>
    </div>
  </body>
</html>




    <!-- </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <fieldset class="form-group row">
      <legend class="col-form-legend col-sm-2">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            Option one is this and that&mdash;be sure to include why it's great
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            Option two can be something else and selecting it will deselect option one
          </label>
        </div>
        <div class="form-check disabled">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            Option three is disabled
          </label>
        </div>
      </div>
    </fieldset>
    <div class="form-group row">
      <label class="col-sm-2">Checkbox</label>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Check me out
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </form>
</div> -->
