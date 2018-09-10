  <html>
 <body>
 <h2>Welcome User</h2>
 <h3 style="color:blue";>You have successfully registered!</h3>
 <!-- <html>
 <body>
 <h2>Welcome User</h2>
 <h3 style="color:blue";>You have successfully registered!</h3> -->
 Full Name:
 <?php 
 echo $_POST["first"]; ?>
 <?php
 echo $_POST["last"]; ?>
 <br>
 Contact number:
 <?php 
 echo $_POST["mob"]; ?>
 <br>
 Date Of Birth:
 <?php 
 echo $_POST["dateofbirth"]; ?>
 <br>
 Your email address is:
 <?php 
 echo $_POST["email"]; ?>
 <br>
 Gender:
 <?php 
 echo $_POST["gender"]; ?>
 <br>
 City:
 <?php 
 echo $_POST["city"]; ?>
 <br>
 Nationality:
 <?php 
 echo $_POST["nationality"]; ?>
 <hr>
 <h3 style="color:gray";>Thank You!</h3>
 <p><b><i>You have been registered as : </b></i>
                    <?php echo $_POST['first'] . ' ' . $_POST['last']; ?>
                </p>
                
 </body>
 </html>