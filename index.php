<html>
	<head>	
		<!-- regular CSS for page -->	
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
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
			$beersurl = "https://docs.google.com/spreadsheets/d/e/2PACX-1vQT-5iyhLm7o6I1AvjYxCqhf9AQV4tqhOlGQx8geyuzOms08Rzf2-g1uIYWoS1J0TVp3DGcZ3-F_5Gs/pub?gid=524162896&single=true&output=csv";
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
	<div id="wrap">
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
				<img src="/images/DB Logo.png" height="100">
			</div>		
			<div id="headerboxb">
				<h1>Dispatch Taplist</h1>
			</div>
		</div>	
		<br />
		<!-- Background div for column headers -->
		<div id="TitleBarBack">
		</div>
		
		<div id="TitleBarBeerPic">
		</div>
		
		<div id="TitleBarBeerName">
		Beer
		</div>
		
		<div id="TitleBarInfo">
		Details
		</div>
		
		<div id="TitleBarKeg">
		Faucet
		</div>
		
		<!-- Tap 1 -->
		<div id="content-row1a">
			<div id="BeerPic">
				<img src="/images/SRM <?php echo $srm['Beer1']; ?>.png" height="150">
			</div>	
			<div id="<?php echo $beernamel['Beer1']; ?>">
				<?php echo "<h1>", $beername['Beer1'], "</h1>";
					echo "<h2>", $style['Beer1'],"<br />", $whobrew['Beer1'], "</h2>"; ?>
			</div>
			<div id="BeerInfo">
				<?php echo $abv['Beer1']; ?>
				<br /><h2>ABV</h2>
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
			</div>
			<div id="BeerStatus">
				<img src="/images/kegs/<?php echo $status['Beer3']; ?>.png" width="80">
			</div>
		</div>

		<!-- Tap 4 -->
		<!-- <div id="content-row2">
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
			</div>
				<div id="BeerStatus">
					<img src="/images/kegs/<?php echo $status['Beer4']; ?>.png" width="80">
				</div>
			</div>
		</div> -->

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
