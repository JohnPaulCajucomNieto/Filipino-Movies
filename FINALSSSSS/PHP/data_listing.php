<?php 
require_once 'retrive.php';
require_once 'connect.php';
$result = display();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../HTML/style1.css">
    <link rel="shortcut icon" href="../IMAGES/amazing-animal-beautiful-beautifull.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/data_listing.css">
    <link rel="stylesheet" href="../CSS/tab.css">
    <title>Data Listing</title>
</head>
<body>
    <nav class="navbar">
        <img style="box-shadow: none;" class="logo" src="../IMAGES/lgs.png" alt="" srcset="">
        <a href="#">DIARY LISTING</a>
        <a href="#">DATA ENTRY</a>
        <a href="../HTML/gallary.html">GALLERY</a>
        <a href="../HTML/profile.html">PROFILE</a>
    </nav>
    <center>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Home')">Home</button>
        <button class="tablinks" onclick="openCity(event, 'Personal')">Personal</button>
        <button class="tablinks" onclick="openCity(event, 'School')">School</button>
        <button class="tablinks" onclick="openCity(event, 'Peers')">Peers</button>
        <button class="tablinks" onclick="openCity(event, 'Others')">Others</button>
      </div></center>
      
      <div id="Home" class="tabcontent">
        <?php
           $result = display(); 
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['category'] === 'Home') {
        ?>
        <div class="style">
          <p class="calendar"><?php echo $row['date'];?></p>
          <p class="long_text"><?php echo $row['content'];?></p>
        </div>
        <?php
      }
            }
        ?>
      </div>
      
      <div id="Personal" class="tabcontent">
        <?php
        $result = display(); 
     while ($row = mysqli_fetch_assoc($result)) {
         if ($row['category'] === 'Personal') {
     ?>
     <div class="style">
       <p class="calendar"><?php echo $row['date'];?></p>
       <p class="long_text"><?php echo $row['content'];?></p>
     </div>
     <?php
   }
         }
     ?>
      </div>
      
      <div id="School" class="tabcontent">
        <?php
           $result = display(); 
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['category'] === 'School') {
        ?>
        <div class="style">
          <p class="calendar"><?php echo $row['date'];?></p>
          <p class="long_text"><?php echo $row['content'];?></p>
        </div>
        <?php
      }
            }
        ?>
      </div>
      <div id="Peers" class="tabcontent">
        <?php
           $result = display(); 
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['category'] === 'Peers') {
        ?>
        <div class="style">
          <p class="calendar"><?php echo $row['date'];?></p>
          <p class="long_text"><?php echo $row['content'];?></p>
        </div>
        <?php
      }
            }
        ?>
      </div>
      <div id="Others" class="tabcontent">
        <?php
           $result = display(); 
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['category'] === 'Others') {
        ?>
        <div class="style">
          <p class="calendar"><?php echo $row['date'];?></p>
          <p class="long_text"><?php echo $row['content'];?></p>
        </div>
        <?php
      }
            }
        ?>
      </div>
    <div id="image-container"></div>
    <footer>
        &copy; 2023 UNLOCKING MEMORIES
    </footer>
    <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
</script>

</body>
</html>