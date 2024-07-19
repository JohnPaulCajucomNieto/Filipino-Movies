<?php 
require_once '../PHP/retrive.php';
require_once '../PHP/connect.php';
$result = display();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style1.css">
    <link rel="shortcut icon" href="../IMAGES/amazing-animal-beautiful-beautifull.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/data_listing.css">
    <title>Data Listing</title>
</head>
<body>
    <nav class="navbar">
        <img style="box-shadow: none;" class="logo" src="../IMG/lgs.png" alt="" srcset="">
        <a href="../HTML/data_listing.html">DIARY LISTING</a>
        <a href="../HTML/data_entry.html">DATA ENTRY</a>
        <a href="../HTML/gallary.html">GALLERY</a>
        <a href="../HTML/profile.html">PROFILE</a>
    </nav>
    <center>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Home')">HOME</button>
        <button class="tablinks" onclick="openCity(event, 'Personal')">PERSONAL</button>
        <button class="tablinks" onclick="openCity(event, 'School')">SCHOOL</button>
        <button class="tablinks" onclick="openCity(event, 'Peers')">PEERS</button>
        <button class="tablinks" onclick="openCity(event, 'Others')">OTHERS</button>
      </div></center>
      
      <div id="Home" class="tabcontent">
        <?php
           $result = display(); 
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['category'] === 'Home') {
        ?>
        <div>
          <p id="calendar"><?php echo $row['date'];?></p>
          <p id="long_text"><?php echo $row['content'];?></p>
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
     <div>
       <p id="calendar"><?php echo $row['date'];?></p>
       <p id="long_text"><?php echo $row['content'];?></p>
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
        <div>
          <p id="calendar"><?php echo $row['date'];?></p>
          <p id="long_text"><?php echo $row['content'];?></p>
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
        <div>
          <p id="calendar"><?php echo $row['date'];?></p>
          <p id="long_text"><?php echo $row['content'];?></p>
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
        <div>
          <p id="calendar"><?php echo $row['date'];?></p>
          <p id="long_text"><?php echo $row['content'];?></p>
        </div>
        <?php
      }
            }
        ?>
      </div>
    <div id="image-container"></div>
   
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