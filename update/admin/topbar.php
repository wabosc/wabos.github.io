<style>
	.logo {
    margin: auto;
    font-size: 30px;
    background: #17a2b8;
    padding: 10px 15px;
    border-radius:150px 350%;
    color: #6f42c1;
}
</style>

<nav class="navbar navbar-dark bg-dark fixed-top " style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<i class="fa fa-building"></i>
  			</div>
  		</div>
      <div class="col-md-4 float-left text-white">
        <b><?php echo $_SESSION['setting_name']; ?></b>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>