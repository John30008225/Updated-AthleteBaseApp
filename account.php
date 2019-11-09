<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS\athleteBase.css">
    <title>AthleteBase</title>
</head>
<?php
  include("heading.php");
?>
  <div class="container">
    <div class="row">
      <div class="col">
        <form action="form-data.php" method="post">
          <div class="row">
            <div class="col">
              <h1 class="athlete-profile-heading">Account</h1>
              <input type="text" class="form-control form-fields" placeholder="Name" name="name">
              <input type="text" class="form-control form-fields" placeholder="DOB: yyyy/mm/dd" name="dob">
              <input type="text" class="form-control form-fields" placeholder="Height" name="height">
              <input type="text" class="form-control form-fields" placeholder="Weight" name="weight">
              <input type="text" class="form-control form-fields" placeholder="Position" name="position">
              <input type="text" class="form-control form-fields" placeholder="Club" name="club">
              <button type="submit" class="btn btn-primary form-fields">Submit</button>
            </div>
          </div>
        </form>
        <?php
          $mysqli = new mysqli("localhost", "root", "password", "athletebase");
          $data = $mysqli->query("SELECT * FROM `athleteaccount`");
          $table = "";

          foreach ($data as $value) {

            $table .= '<table class="athlete-table">';

            $table .= '<tr>';
            $table .= '<td>';
            $table .= 'Name: ' . $value['Name'];
            $table .= '</td>';
            $table .= '</tr>';

            $table .= '<tr>';
            $table .= '<td>';
            $table .= 'Date of Birth: ' . $value['DOB'];
            $table .= '</td>';
            $table .= '</tr>';
            
            $table .= '<tr>';
            $table .= '<td>';
            $table .= 'Weight: ' . $value['Weight'];
            $table .= '</td>';
            $table .= '</tr>';

            $table .= '<tr>';
            $table .= '<td>';
            $table .= 'Height: ' . $value['Height'];
            $table .= '</td>';
            $table .= '</tr>';

            $table .= '<tr>';
            $table .= '<td>';
            $table .= 'Position: ' . $value['Position'];
            $table .= '</td>';
            $table .= '</tr>';

            $table .= '<tr>';
            $table .= '<td>';
            $table .= 'Club: ' . $value['Club'];
            $table .= '</td>';
            $table .= '</tr>';

            $table .= '</table>';
          }
          echo $table;
        ?>
      </div>
    </div>
  </div>
<?php
  include("footer.php");
?>