<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/style.css?67er">
</head>
<body>

	<header>
		<div class="logo-holder">
		<center><img src="assets/images/treble-clef.png" style="border-radius: 10%;"></center>
		</div>
		<div class="header-div">
			<div class="main-title">
				PRO MÚSIC
				
			</div>
			<div class="main-nav">
				<div class="nav-item"><a href="<?=ROOT?>">Home</a></div>
				<div class="nav-item"><a href="<?=ROOT?>/music">Music</a></div>
				<!-- <div class="nav-item dropdown">
					<a href="#">Category</a>
 					<?php 
 						$query = "select * from categories order by category asc";
 						$categories = db_query($query);
 					?>

					<div class="dropdown-list">
						 				 
	  					<?php if(!empty($categories)):?>
		  					<?php foreach($categories as $cat):?>
		  						<div class="nav-item2"><a href="<?=ROOT?>/category/<?=$cat['category']?>"><?=$cat['category']?></a></div>
		  					<?php endforeach;?>
	  					<?php endif;?>
 
					</div>
				</div> -->
				<div class="nav-item"><a href="<?=ROOT?>/artists">Artists</a></div>
				<div class="nav-item"><a href="../public/login.php">Login</a></div>	

				<?php if(logged_in()):?>
					<div class="nav-item dropdown">
						<div class="dropdown-list">
							<div class="nav-item"><a href="<?=ROOT?>/admin">Admin</a></div>
							<div class="nav-item"><a href="<?=ROOT?>/logout">Logout</a></div>
						</div>
					</div>
				<?php endif;?>

			</div>
		</div>
	</header>