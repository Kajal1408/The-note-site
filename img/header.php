
         <nav class="nav navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" target="_blank" class="navbar-brand">Lifestyle Store</a></div>
                    <div class="navbar-right" >
                        <div class="collapse navbar-collapse" id="mynavbar">
                         <ul class="nav navbar-nav">
                             <?php
                             if(isset($_SESSION['email']))
                                 {?>
                        
                         
                             <li> <a href="#.php" target="_blank" class="navbar-brand"><span class="glyphicon glyphicon">Notesspan></a></li>
                             <li><a href="setting.php" target="_blank" class="navbar-brand"><span class="glyphicon glyphicon-user">Setting</span></a></li>
                              <li><a href="setting.php" target="_blank" class="navbar-brand"><span class="glyphicon glyphicon-log-in">Logout</span></a></li>
                             <?php }else{?>
                               <li><a href="setting.php" target="_blank" class="navbar-brand"><span class="glyphicon glyphicon-user">Sign Up</span></a></li>
                                <li><a href="setting.php" target="_blank" class="navbar-brand"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
                         <?php
                             }?></ul></div>
                    </div>
                </div>
        </nav>
    
