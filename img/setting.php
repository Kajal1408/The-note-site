<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>setting</title>
        <link rel="stylesheet" type="text/css"   href="style.css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
        <script src="bootstrap-3.3.7-dist/js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #heights{
                margin-top:75px;
            }
        </style>
    </head>
    <body>
<?php 
include 'common.php';
include 'header.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
        <div class="container col-lg-offset-4" id="heights">
            <div class="panel">
                
                <div class="panel-body col-lg-4">
                    <h4>Change Password</h4>
                    <form method="post" action="setting_script.php">
                    <input type="password" name="old" placeholder="OldPassword" class="form-control" id="oldpassword"><br>
                    <input type="password" name="new" placeholder="NewPassword" class="form-control" id="newpassword"><br>
                    <input type="password" name="re" placeholder="Re-type NewPassword" class="form-control" id="renewpassword"><br>
                    <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                   
                </div>
                </div>
               
        </div>
        <?php
include 'footer.php';
?>
    </body>
</html>
