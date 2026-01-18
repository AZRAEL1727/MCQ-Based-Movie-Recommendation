<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Result</title>
    <link rel="stylesheet" href="page_three.css">
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "movie_recommendation";
    // create conneciton
    $conn = new mysqli($servername,$username,$password,$databasename);
    /*$mysqli = new mysqli($servername,$username,$password,$databasename);*/


    if ($conn -> connect_error){
      die("Connection failed: ". $conn-> connect_error);
    }

    echo "";

    $sql = "SELECT Name FROM sheet1 WHERE Name='Revenge'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Name"];
      }
    } else {
      echo "0 results";
    }







    /*$sql = "SELECT * FROM 'sheet1'";
    $result = $conn->query($sql);
    /*$num = mysqli_num_rows($result);
    echo $num;
    echo "<br>";*/
    /*if($num>0){
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo "<br>";
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo "<br>";
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo "<br>";
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo "<br>";
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        echo "<br>";
      }*/
    ?>
    <div class="photo-grid-container">
      <div class="photo-grid">
        <div class="photo-grid-item first-item">
          <div class="movie-name">
            <h2>Movie Name</h2>
          </div>
          <div class="poster">
            <h1>box 1</h1>
          </div>
          <div class="imdb">
            <h3>IMDB</h3>
          </div>
        </div>
        <div class="photo-grid-item">
          <div class="movie-name">
            <h2>Movie Name</h2>
          </div>
          <div class="poster">
            <h1>box 2</h1>
          </div>
          <div class="imdb">
            <h3>IMDB</h3>
          </div>
        </div>
        <div class="photo-grid-item">
          <div class="movie-name">
            <h2>Movie Name</h2>
          </div>
          <div class="poster">
            <h1>box 3</h1>
          </div>
          <div class="imdb">
            <h3>IMDB</h3>
          </div>
        </div>
        <div class="photo-grid-item">
          <div class="movie-name">
            <h2>Movie Name</h2>
          </div>
          <div class="poster">
            <h1>box 4</h1>
          </div>
          <div class="imdb">
            <h3>IMDB</h3>
          </div>
        </div>
        <div class="photo-grid-item last-item">
          <div class="movie-name">
            <h2>Movie Name</h2>
          </div>
          <div class="poster">
            <h1>box 5</h1>
          </div>
          <div class="imdb">
            <h3>IMDB</h3>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
