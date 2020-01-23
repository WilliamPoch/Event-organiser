

<?php
	if ($_SESSION) { ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 0px;">
<img src="img/logo.jpg" class="align-self-center image-responsive" style="width:2%; margin-right: -10px;" alt="...">
  <a class="navbar-brand" href="Main.php">Event Organizer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="nav navbar-nav navbar-right">
      <li><a href="Create_Event.php">Create Event</a></li>
      <li><a href="LogOut.php">Log Out</a></li>
    </ul>
    <ul class="navbar-nav mr-auto navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="Main.php">Browse Events <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="OrganizerPage.php">Manage Events</a>
          <a class="dropdown-item" href="ParticipantPage.php">Joined Events</a>
		
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">How it works</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">What does it cost to create an event?</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Where are my tickets?</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">How to contact the event organizer</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Help Center</a>
        </div>
      </li>
    </ul>
    
  </div>

</nav>

<?php
	} else { ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 0px;">
<img src="img/logo.jpg" class="align-self-center image-responsive" style="width:2%; margin-right: -10px;" alt="...">
  <a class="navbar-brand" href="Main.php">Event Organizer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="nav navbar-nav navbar-right">
      <li><a href="Sign In.php">Create Event</a></li>
      <li><a href="Sign In.php">Sign In</a></li>
    </ul>
    <ul class="navbar-nav mr-auto navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="Main.php">Browse Events <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">How it works</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">What does it cost to create an event?</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Where are my tickets?</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">How to contact the event organizer</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Help Center</a>
        </div>
      </li>
    </ul>
    
  </div>

</nav>


	<?php }
?>