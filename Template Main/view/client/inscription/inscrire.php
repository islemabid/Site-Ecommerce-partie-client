<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="view/client/inscription/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="view/client/inscription/css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="view/client/inscription/images/logopanier.jpg" alt="">
                </div>
                <div class="signup-form">
                <form action="index.php?action=added&controller=Client" method="POST"  class="register-form" id="register-form" >
 <h2> registration form</h2>
  <div class="form-row">
  <div class="form-group">
    <label > customer_id:</label>
    <input type="text" class="form-control" name= "pseudo" required>
  </div>
  
  <div class="form-group">
    <label > Last Name:</label>
    <input type="text" class="form-control"  name= "nom">
  </div>
  
  
  <div class="form-group">
    <label > First Name: </label>
    <input type="text" class="form-control" name= "prenom">
  </div>
  </div>
  
  <div class="form-group">
    <label> Email ID : </label>
    <input type="text" class="form-control"  name= "email" placeholder="example@gmail.com" 
   required>
  </div>
  
  
  <div class="form-group">
    <label> Phone number :</label>
    <input type="text" class="form-control" name= "telephone">
  </div>
  <div class="form-group">
    <label> adress : </label>
    <input type="text" class="form-control"  name= "adresse">
  </div>
  
  <div class="form-group">
    <label>Gender :</label>
    <input type="text" class="form-control"  name= "genre">
  </div>
  <div class="form-group">
    <label>password (8 characters minimum):</label>
    <input type="password" class="form-control" name="mp"    minlength="8"  required>
	
  </div>
  

  <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" >
                            
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit">
                        </div>
  
  </form>

                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="view/client/inscription/vendor/jquery/jquery.min.js"></script>
    <script src="view/client/inscription/js/main.js"></script>
</body>
</html>