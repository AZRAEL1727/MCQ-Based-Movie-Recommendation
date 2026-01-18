<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="page_two.css">
    <title>Questions</title>
  </head>
  <body>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $databasename = "movie_recommendation";
      // create conneciton
      $conn = new mysqli($servername,$username,$password,$databasename);

      if ($conn -> connect_error){
        die("Connection failed: ". $conn-> connect_error);
      }

      echo "connection successfull";



    ?>
    <div class="image">
      <div class="absolute"><img src="image/pic2.png" alt=""></div>
    </div>
    <div class="headinggg">
      <h1><u>You choose we recommend</u></h1>
    </div>
      <div class="heading">
        <form aciton = "page_two.php" method="post" name = "form1">
          <h2>How old do you want the movie?</h2>
          <div class="options">
            <input type="radio" name="question1" value="1990-1995">
            <label>1990-1995</label><br>
            <input type="radio" name="question1" value="1995-2000">
            <label>1995-2000</label><br>
            <input type="radio" name="question1" value="2000-2005">
            <label>2000-2005</label><br>
            <input type="radio" name="question1" value="2005-2010">
            <label>2005-2010</label><br>
            <input type="radio" name="question1" value="2010-2015">
            <label>2010-2015</label><br>
            <input type="radio" name="question1" value="2015-2020">
            <label>2015-2020</label>
          </div>
        </form>
      </div>
      <?php
          /*add_shortcode('addContent', 'addContent');

          function addContent(){
              echo '<form method="GET">'; // printing form tag
              echo '<input type="radio" name="question 1">';
              echo '</form>';

              if (isset($_GET['question1'])) { // checking is form was submitted  then accessing to value
                  $choice1 = $_GET['question1'];

                  echo "<p> the option taken is: $choice1 </p>";
              }

          }*/

       ?>
      <div class="heading">
        <form aciton = "page_two.php" method="post" name = "form2">
          <h2>Which genre would you like to watch?</h2><br>
          <div class="options">
            <input type="radio" name="question2" value="Comedy">
            <label>Comedy</label><br>
            <input type="radio" name="question2" value="Action">
            <label>Action</label><br>
            <input type="radio" name="question2" value="Drama">
            <label>Drama</label><br>
            <input type="radio" name="question2" value="Horror">
            <label>Horror</label>
          </div>
        </form>
      </div>
      <div class="heading">
        <form aciton = "page_two.php" method="post" name = "form3">
          <h2>Please select the ratings you are okay with</h2><br>
          <div class="options">
            <input type="radio" name="question3" value="PG">
            <label>PG</label><br>
            <input type="radio" name="question3" value="PG-13">
            <label>PG-13</label><br>
            <input type="radio" name="question3" value="R">
            <label>R</label>
          </div>
        </form>
      </div>
      <div class="heading">
        <form aciton = "page_two.php" method="post" name = "form4">
          <h2>How long would you like the movie to be?</h2><br>
          <div class="options">
            <input type="radio" name="question4" value="90">
            <label>less that 90 min</label><br>
            <input type="radio" name="question4" value="110">
            <label>less than 110 min</label><br>
            <input type="radio" name="question4" value="130">
            <label>less than 130 min</label><br>
            <input type="radio" name="question4" value="150">
            <label>less than 150 min</label>
          </div>
        </form>
      </div>
      <div class="heading">
        <form aciton = "page_two.php" method="post" name = "form5">
          <h2>Question number 5</h2><br>
          <input type="radio" name="question5">
          <label>OPTION 1</label><br>
          <input type="radio" name="question5">
          <label>OPTION 2</label><br>
          <input type="radio" name="question5">
          <label>OPTION 3</label><br>
          <input type="radio" name="question5">
          <label>OPTION 4</label>
        </form>
      </div>
<a href ="page_three.php">
<div class="button">
<input type="submit" name="submit" value="submit"><label><h2>GET RECOMMENDATIONS</h2></label>
</div>

    <?php
    if(isset($_POST['submit'])){
      $question1 = $_POST['question1'];
      $question2 = $_POST['question2'];
      $question3 = $_POST['question3'];
      $question4 = $_POST['question4'];
      $question5 = $_POST['question5'];
    }

    $sql = "CREATE OR REPLACE TABLE recommend (
        Year VARCHAR(25) ,
        Genre VARCHAR(25) ,
        Rating VARCHAR(25),
        Duration INT(10),
      )";
      if ($conn->query($sql) == TRUE) {
        echo "";
      } else {
        echo "Error creating table: " . $conn->error;
      }

      $sql = "INSERT INTO recommend (Year, Genre, Rating, Duration)
      VALUES ('$question1', '$question2', '$question3', '$question4')";
      if ($conn->query($sql) === TRUE) {
        echo "";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    ?>

    <?php $conn->close();
     ?>
  </body>
</html>
