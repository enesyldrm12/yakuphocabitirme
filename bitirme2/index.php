<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('location:success.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Login</h1>
    <div id="vueapplogin">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><span class="glyphicon glyphicon-lock"></span> Sign in</div>
                <div class="panel-body">
                    <label>Username:</label>
                    <input type="text" class="form-control" v-model="logDetails.username" v-on:keyup="keymonitor">
                    <label>Password:</label>
                    <input type="password" class="form-control" v-model="logDetails.password" v-on:keyup="keymonitor">
                    <label>Code:</label>
                    <input type="text" id="code" class="form-control" name="code">
                    <label>Code Enter:</label>
                    <input type="text" id="codeenter" class="form-control" name="codeenter">
                    
                </div>
                <div class="panel-footer">
                    <button class="btn btn-primary btn-block" @click="checkLogin();"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                </div>
            </div>
 
            <div class="alert alert-danger text-center" v-if="errorMessage">
                <button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">×</span></button>
                <span class="glyphicon glyphicon-alert"></span> {{ errorMessage }}
            </div>
 
            <div class="alert alert-success text-center" v-if="successMessage">
                <button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">×</span></button>
                <span class="glyphicon glyphicon-check"></span> {{ successMessage }}
            </div>
 
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="applogin.js"></script>
</body>
</html>