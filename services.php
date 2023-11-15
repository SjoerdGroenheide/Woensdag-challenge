<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: darkblue;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: orange;
}

.active {
  background-color: orange;
}
</style>
</head>
<body>

<ul>
    <li><a href="index.php">TheChallengeZone</a></li>  
  <li style="float:right"><a href="contact.php">Visualisatie</a></li>
  <li style="float:right"> <a href="portfolio.php">Schedule</a></li>
  <li style="float:right"><a class="active"href="services.php">Documentatie</a></li>
  <li style="float:right"><a href="studentprofile.php">Student Profile</a></li>
  <li style="float:right"><a  href="index.php">Home</a></li>
</ul>


</body>
</html>


