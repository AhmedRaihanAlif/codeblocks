<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jungle Book - Shanti</title>
    <link rel="stylesheet" href="jungleCSS/j1.css">
    <link rel = "icon" href = "jungleCSS/1.png" type = "image/x-icon">

</head>
<body class="body">
<?php

$username=$_GET['username'];
echo $username;

if(isset($_POST['submit'])){
  $username=$_GET['username'];
  $url="jungle3.php?username=".$username;
header('location: '.$url);
}




?>
  <center>
   <h1 style="color:darkgreen;">Welcome to the Jungle</h1>
 </center>
    
    
   <!-- <p id="demo"> </p> -->
    
    <script src="timer.js"></script>
 


    <div  id="myDIV">
        <center>
          <h2 id="borderimg1" style="color: rgb(0, 116, 224);">This is Shanti<br>
            She lives in a village beside the jungle<br>
            She is a very good freind of Mowgli

          </h2>
        
          <textarea hidden="hidden" id="text" cols="0" rows="0" style="font-size:0px;background-color:#192841;border-radius: 0px;border-color: #192841;" >
                    This is Shanti. She lives in a village beside the jungle. She is a very good freind of Mowgli
</textarea> 
          
        
      <!-- <select style="background-color:skyblue ; margin-left: 10px;" id="voiceselection"></select> -->
          <input  onmouseover="bigImg(this)" onmouseout="normalImg(this)"  class="button" style="background-color:blueviolet;padding: 10px; font-style:inherit;border-radius: 8px;margin-right: 5vh;"
          onclick="responsiveVoice.speak($('#text').val(),$('#voiceselection').val());" 
          type="button" 
          value="Listen Text" 
        />


        <script>
          function bigImg(x) {
            x.style.height = "70px";
            x.style.width = "150px";
          }
          
          function normalImg(x) {
            x.style.height = "50px";
            x.style.width = "140px";
          }
          </script>
        <script src="https://code.responsivevoice.org/responsivevoice.js?key=mYCG5FUs"></script>

        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script>var voicelist = responsiveVoice.getVoices();
          var vselect = $("#voiceselection");
          $.each(voicelist, function() {
          vselect.append($("<option />").val(this.name).text(this.name));
          });</script>

        
        
        </center>
        

       
   
</div>
 
    <div class="container">
      
       
        <div class ="item1">

            <div class="card2">
                <img src="jungleCSS/2.png" alt="Denim Jeans" style="width:100%;height: 70vh;">
                <h1 id="rick"  class="rickshaw">Shanti</h1>
               
                <form method="post" >
                <button id="b1" type="submit" name="submit" class="button">PLAY</button>
                 
            </form>
              </div>
              
                </div>

  
                    <script>
                      function myFunction() {
  document.getElementById("rick").style.color = "#ff0000";
  document.getElementById("bus").style.color = "magenta";
  document.getElementById("bike").style.color = "orange";
  
}

function myFunction2() {
  document.getElementById("rick").style.color = "white";
  document.getElementById("bus").style.color = "white";
  document.getElementById("bike").style.color = "white";
  
}
function myFunction2() {
  document.getElementById("rick").style.color = "white";
  document.getElementById("bus").style.color = "white";
  document.getElementById("bike").style.color = "white";
  
}
                    </script>
                    <script src="https://code.responsivevoice.org/responsivevoice.js?key=mYCG5FUs"></script>

                    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
                    <script>var voicelist = responsiveVoice.getVoices();
                      var vselect = $("#voiceselection");
                      $.each(voicelist, function() {
                      vselect.append($("<option />").val(this.name).text(this.name));
                      });</script>

                  
    
</body>
</html>