<!DOCTYPE html>
<html>
<head>
 <title>Quiz Answers</title>

  <style>
  #wrapper {
   width: 950px;
   height: auto;
   padding: 12px;
   margin-right: auto;
   margin-left: auto;
   background-color: #fff;
  }
 </style>

  <?php
 $pid = $_GET['id'];
 ?>
</head>
<body bgcolor="powderblue">

  <div id="wrapper">
  <center><font face='Berlin Sans FB' size='7'>Your score is shown here.</font></center>
 

  <?php
 $Answer1 = $_POST['AnswerOne'];
 $Answer2 = $_POST['Answertwo'];
 $Answer3 = $_POST['Answerthree'];

  $score = 0;
 if ($Answer1 == "A") {$score++;}
 if ($Answer2 == "B") {$score++;}
 if ($Answer3 == "C") {$score++;}
 else {
  echo "Chose the answer first";
 }
 ?>

  <?php  

  echo "<br>";
 echo "<br>";
 echo "<br>";

  echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<center> <font face='Berlin Sans FB' size='5'>Your score is   $score/3</font> </center>";
 ?>
 </div>
</body>

</html>
