<html>
	<head>	
		<!-- regular CSS for page -->	
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<?php
			// set up variables and arrays 
			$beername = array();
			$style = array();
			$whobrew = array();					
			$whobrew = array();					
			$abv = array();					
			$hops = array();
			$srm = array();
			$status = array();
			$beernamel = array();

			
			// set URL/Paths for csv and recipe pages
			$beersurl = "beers.csv";
			$tap1fB = "";
			$tap2fB = "";
			$tap3fB = "";
			$tap4fB = "";
			$tap5fB = "";
			$tap6fB = "";
			
			// writes csv info into arrays
			$handle = fopen($beersurl, "r");
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
					$beername[$data[0]] = $data[1];
					$style[$data[0]] = $data[2];
					$whobrew[$data[0]] = $data[3];
					$abv[$data[0]] = $data[4];
					$hops[$data[0]] = $data[5];
					$srm[$data[0]] = $data[6];
					$status[$data[0]] = $data[7];
					$beernamel[$data[0]] = $data[8];
				}
			fclose($handle);
		?>
	</head>
	
	<body>
		<div id="header">
			<div id="headerboxa">
				<br />
				<?php
					$date=getdate(date("U"));
					print("$date[month] <br /> $date[mday], $date[year]");
				?>
			</div>
			<div id="headerboxa">
				<img src="/images/blank.png" height="100">
			</div>		
			<div id="headerboxb">
				<h1>BEERS ON TAP</h1>
			</div>
		</div>	
		<br />
		<!-- Background div for column headers -->
		<div id="TitleBarBack">
		</div>
		
		<div id="TitleBarBeerPic">
		</div>
		
		<div id="TitleBarBeerName">
		NAME
		</div>
		
		<div id="TitleBarInfo">
		INFO
		</div>
		
		<div id="TitleBarKeg">
		STATUS
		</div>
		
		<!-- Tap 1 -->
		<div id="content-row1a">
			<div id="BeerPic">
				<img src="/images/SRM <?php echo $srm['Beer1']; ?>.png" height="150">
			</div>	
			<div id="<?php echo $beernamel['Beer1']; ?>">
				<?php echo "<h1>", $beername['Beer1'], "</h1>";
					echo "<h2>", $style['Beer1'], "<br />", $whobrew['Beer1'], "</h2>"; ?>
			</div>
			<div id="BeerInfo">
				<?php echo $abv['Beer1']; ?>
				<br /><h2>ABV</h2>
				<img src="/images/<?php echo $hops['Beer1']; ?> Hops.png" width="200">
			</div>
			<div id="BeerStatus">
				<img src="/images/kegs/<?php echo $status['Beer1']; ?>.png" width="80">
			</div>
		</div>
		
		<!-- Tap 2 -->
		<div id="content-row2">
			<div id="content-row2g">
			</div>		
			<div id="content-row2a">
			<div id="BeerPic">
				<img src="/images/SRM <?php echo $srm['Beer2']; ?>.png" height="150">
			</div>	
			<div id="<?php echo $beernamel['Beer2']; ?>">
				<?php echo "<h1>", $beername['Beer2'], "</h1>";
					echo "<h2>", $style['Beer2'], "<br />", $whobrew['Beer2'], "</h2>"; ?>
			</div>
			<div id="BeerInfo">
				<?php echo $abv['Beer2']; ?>
				<br /><h2>ABV</h2>
				<img src="/images/<?php echo $hops['Beer2']; ?> Hops.png" width="200">
			</div>
				<div id="BeerStatus">
					<img src="/images/kegs/<?php echo $status['Beer2']; ?>.png" width="80">
				</div>
			</div>
		</div>
		
		<!-- Tap 3 -->		
		<div id="content-rowe">
			<div id="BeerPic">
				<img src="/images/SRM <?php echo $srm['Beer3']; ?>.png" height="150">
			</div>	
			<div id="<?php echo $beernamel['Beer3']; ?>">
				<?php echo "<h1>", $beername['Beer3'], "</h1>";
					echo "<h2>", $style['Beer3'], "<br />", $whobrew['Beer3'], "</h2>"; ?>
			</div>
			<div id="BeerInfo">
				<?php echo $abv['Beer3']; ?>
				<br /><h2>ABV</h2>
				<img src="/images/<?php echo $hops['Beer3']; ?> Hops.png" width="200">
			</div>
			<div id="BeerStatus">
				<img src="/images/kegs/<?php echo $status['Beer3']; ?>.png" width="80">
			</div>
		</div>

		<!-- Tap 4 -->
		<div id="content-row2">
			<div id="content-row2g">
			</div>		
			<div id="content-row2a">
				<div id="BeerPic">
				<img src="/images/SRM <?php echo $srm['Beer4']; ?>.png" height="150">
			</div>	
			<div id="<?php echo $beernamel['Beer4']; ?>">
				<?php echo "<h1>", $beername['Beer4'], "</h1>";
					echo "<h2>", $style['Beer4'], "<br />", $whobrew['Beer4'], "</h2>"; ?>
			</div>
				<div id="BeerInfo">
				<?php echo $abv['Beer4']; ?>
				<br /><h2>ABV</h2>
				<img src="/images/<?php echo $hops['Beer4']; ?> Hops.png" width="200">
			</div>
				<div id="BeerStatus">
					<img src="/images/kegs/<?php echo $status['Beer4']; ?>.png" width="80">
				</div>
			</div>
		</div>

		<!-- Tap 5 -->
		<div id="content-rowe">
			<div id="BeerPic">
				<img src="/images/SRM <?php echo $srm['Beer5']; ?>.png" height="150">
			</div>	
			<div id="<?php echo $beernamel['Beer5']; ?>">
				<?php echo "<h1>", $beername['Beer5'], "</h1>";
					echo "<h2>", $style['Beer5'], "<br />", $whobrew['Beer5'], "</h2>"; ?>
			</div>
			<div id="BeerInfo">
				<?php echo $abv['Beer5']; ?>
				<br /><h2>ABV</h2>
				<img src="/images/<?php echo $hops['Beer5']; ?> Hops.png" width="200">
			</div>
			<div id="BeerStatus">
				<img src="/images/kegs/<?php echo $status['Beer5']; ?>.png" width="80">
			</div>
		</div>

		<!-- Tap 6 -->
		<div id="content-row2">
			<div id="content-row2g">
			</div>		
			<div id="content-row2a">
				<div id="BeerPic">
				<img src="/images/SRM <?php echo $srm['Beer6']; ?>.png" height="150">
			</div>	
			<div id="<?php echo $beernamel['Beer6']; ?>">
				<?php echo "<h1>", $beername['Beer6'], "</h1>";
					echo "<h2>", $style['Beer6'], "<br />", $whobrew['Beer6'], "</h2>"; ?>
			</div>
				<div id="BeerInfo">
				<?php echo $abv['Beer6']; ?>
				<br /><h2>ABV</h2>
				<img src="/images/<?php echo $hops['Beer6']; ?> Hops.png" width="200">
			</div>
				<div id="BeerStatus">
					<img src="/images/kegs/<?php echo $status['Beer6']; ?>.png" width="80">
				</div>
			</div>
		</div>		

		<div id="footer">
			Kegerface 2.13.13v
		</div>
		
		<!-- this overlays a graphic that gives a little more grunge look to everything -->
		<span></span>
		
		<!-- overlay divs for links to recipes -->
		<a target="_blank" href="<?php echo $tap1fB; ?>"><div id="links1"></div></a>
		<a target="_blank" href="<?php echo $tap2fB; ?>"><div id="links2"></div></a>
		<a target="_blank" href="<?php echo $tap3fB; ?>"><div id="links3"></div></a>
		<a target="_blank" href="<?php echo $tap4fB; ?>"><div id="links4"></div></a>
		<a target="_blank" href="<?php echo $tap5fB; ?>"><div id="links5"></div></a>
		<a target="_blank" href="<?php echo $tap6fB; ?>"><div id="links6"></div></a>
	</body>
</html>
