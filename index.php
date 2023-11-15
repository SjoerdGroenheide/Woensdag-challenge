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
.hoofddiv{
  width: 100%;
}
.left { 
  text-align: right;
  margin-right: 20%;
  
}
.hoofdimg
{
 align:left;
}
.seconddiv{
  background-color: lightgrey;
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.blue{
  color:blue;
}
.footer{
  text-align: center;
  padding: 3px;
  background-color: darkBlue;
  color: orange;
}
</style>
</head>
<body>

<ul>
    <li><a href="index.php">TheChallengeZone</a></li>  
  <li style="float:right"><a href="contact.php">Visualisatie</a></li>
  <li style="float:right"> <a href="portfolio.php">Schedule</a></li>
  <li style="float:right"><a href="services.php">Documentatie</a></li>
  <li style="float:right"><a href="studentprofile.php">Student Profile</a></li>
  <li style="float:right"><a class="active" href="index.php">Home</a></li>
</ul>




<div class='hoofddiv'>
 
  <div class='left'><div class='blue'> <h2>Webdesign</h2></div>
  <h1>VSV Website</h1>
  <h3>Groep 1</h3>
  <h2>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</br>
     The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. 
     </h2>     
</div>
 <div class='hoofdimg'>
<img src="./images/logo.png" alt="Italian Trulli">
</div>
</div>
<div class='seconddiv'>
<h1>Alle Projecten</h1>
<div class="row">
  <div class="column">
    <img src="./images/logo.png" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="./images/logo.png" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="./images/logo.png" alt="Mountains" style="width:100%">
  </div>
</div>
</div>

<div class='footer'>
<footer>
<p>The Challenge Zone<br>
  </p>
</footer>
</div>
</body>
</html>


