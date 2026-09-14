<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FNaFWiki</title>
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo(rand(1,1000));?>">
	<style>
		<?php
		
		?>
	</style>
</head>
<body>
	<table id="header" class="card">
		<td><img src="assets/img/icon.png" alt="FNaF Wiki Icon" id="logo"></td>
		<td id="title">FNaFWiki</td>
		<td id="nav">
				<?php
					include 'assets/php/logic.php';
					$logic = new logic();
					$logic->getNavBarItems();
				?>
		</td>
	</table>
	<script>
    function hoverMenu(thisElement) {
        const menu = thisElement.querySelector('.menu');
        menu.style.opacity = '1';
        menu.style.visibility = 'visible';
        menu.style.transform = 'translateY(0)';
    }
    
    function hideMenu(thisElement) {
        const menu = thisElement.querySelector('.menu');
        menu.style.opacity = '0';
        menu.style.visibility = 'hidden';
        menu.style.transform = 'translateY(-10px)';
    }
	</script>