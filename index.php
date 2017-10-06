<html>
<head>
<title>OS Assign</title>
<!--<script src="angularLib1.js"></script>
<script src="angularLib2.js"></script>
<script src="angularLib3.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
-->
</head>

<body>
<img src = "img/terry.gif">
<form action="login.php" method="post">
    <br><br>
    Username: <input name="user" type="text"> 
    <br><br>
    Password: <input name="pass" type="password">
    <br><br>
    <button type="submit" id="Login">Login</button>
</form>
<br><br>
Register down below
<br><br>
<form action="register.php" method="post">
    Username: <input name="user" type="text">
    <br><br>
    Password: <input name="pass" type="password">
    <br><br>
    <button type="submit" id="Register">Register</button>
</form>

</body>
<!--
<script>
    var app = angular.module("myApp", []);
        app.controller("myCtrl", function($scope, $http) {
            
            $scope.process = function () {
                $http.post("login.php",{
                    "user": $scope.username,
                    "pass": $scope.password
                }).then(function(data, status){
                    //enter other stuff planning to do here
                })
            }

            $scope.load = function () {
                $http.post("register.php",{
                    "user": $scope.user,
                    "pass": $scope.pass
                }).then(function(data, status){
                    //enter other stuff planning to do here
                })
            }

        });
</script>
-->
</html>