<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <body>
  <div class="row" style="background-color: #ffb347;text-align: center; height: 60em;border:3px solid black;"></body>
         <head>
          <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no">
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
           <meta name="HandheldFriendly" content="true">
             <script type="text/javascript">
                 function Captcha(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
                    document.getElementById("mainCaptcha").value = code
                  }
                  function ValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){
                        return true;
                      }
                      else{        
                        return false;
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
             </script>    
        </head>
     <center> 
      <body onload="Captcha();" >
        <table>
          <tr>
           <td>
                 <h1>Text Captcha</h1><br />
           </td>
          </tr>
          <tr>
           <td>
            <input type="text" id="mainCaptcha"/>
            <input type="button" id="refresh" value="Generate" onclick="Captcha();"/></br>
           </td>
          </tr>
          <tr>
           <td>
            <input type="text" id="txtInput"/>    
          </td>
         </tr>
         <tr>
          <td>
            <input id="Button1" type="button" value="Check" onclick="alert(ValidCaptcha());"/>
          </td>
        </tr>
      </table>
    </body>
    </center>
 </html>


  