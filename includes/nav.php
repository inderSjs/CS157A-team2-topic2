<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">CS157A Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php 
                if(isset($_SESSION['thc_no'])){ ?>                    
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="active"><a href="#">THC#: <?php echo($_SESSION['thc_no']);?></a></li>
                            <li class="active"><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
                    
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="active"><a href="login.php">Log In</a></li>                   
                <?php } ?>
                
                
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>