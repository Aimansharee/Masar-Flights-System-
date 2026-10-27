<nav class="navbar navbar-light fixed-top topbar-nav" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<span class="fa fa-plane-departure"></span>
  			</div>
  		</div>
      <div class="col-md-4 float-left text-white" style="display:flex; align-items:center; height:35px;">
        <large style="font-size: 1.25rem;"><b>Masar <span style="color: #76B900;">Flights</span></b></large>
      </div>
	  	<div class="col-md-3 float-right text-right" style="display:flex; align-items:center; justify-content:flex-end; height:35px;">
	  		<a href="ajax.php?action=logout" class="logout-btn"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off" style="color:#76B900; margin-left:5px;"></i></a>
	    </div>
    </div>
  </div>
</nav>
