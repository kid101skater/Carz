<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
         <a class="navbar-brand-logo" href="#">
        <img src="<?= $BASE ?>/base_images/carzLogo.png" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
           <br>
      <ul class="nav navbar-nav" id = "navSet">

        <li id="navSet"><a href="<?= $BASE ?>/" id="navMenu">HOME</a></li>
        <li id="navSet"><a href="#" id="navMenu">MY GARAGE</a></li>
        <li id = "navSet"><a href="#" id="navMenu">LATEST TREND</a></li>
        <li id = "navSet"><a href="#" id="navMenu">OTHER</a></li>
<!--        <li><form>
  <input type="text" name="search" placeholder="Search by username, car model, or post title">
</form>
</li>-->
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= $BASE ?>/Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
  
</nav>
