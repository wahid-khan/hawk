<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script src="bootstrap.min.js" type="text/javascript" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link https="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
    <link https="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" rel="stylesheet">

<style>
    body, html {
  height: 100%;
  width: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("banner.jpg");

  min-height: 70%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.bg-img > h1{
	color: white;
	position: relative;
	top: 30px;
	left: 50px;
	margin-top: 50px;
}
form > h2{
	color: #9856A2;
}

/* Add styles to the form container */
#container-row {
  position: relative;
  left: 30px;
  width: 50%;
  margin: 20px;
  margin-top: 50px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
    <div class="bg-img">
        <img src="https://images.pexels.com/photos/4173624/pexels-photo-4173624.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
    </div>
    <div class="container">
        <h1>Register as Business Partner</h1>
        <div class="container col-sm-12">	
            <div class="row col-sm-12" id="container-row">
                <div class="container col-sm-6">
                      <form class="col-sm-6">
                        <h2>Become OurFoodGuru.com Business Partner</h2>
                        <p>
                            We give you an opportunity to grow your business with OurFoodGuru.com
                        </p>
    
                        <label>Name:</label>
                        <input type="text" placeholder="Enter Email" name="email" required>
    
                        <label>Restaurant Name:</label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
    
                        <div class="row">
                              <div class="container col-sm-6">
                                  <label>
                                      Name:
                                  </label>	
                              </div>
                              <div class="container col-sm-6">
                                  <label>
                                      Contact Number:
                                  </label>	
                              </div>
                          </div>
                     </form>
                 </div>
                 <div class="container col-sm-6">
                      <p style="color: black"></p>
                 </div>
            </div>
        </div>
    </div>
    </body>
<script>

</script>
</html>