<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FNaFWiki</title>
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png">
    <!-- <link rel="stylesheet" href="assets/css/style.css?v=<?php echo(rand(1,1000));?>"> -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo(rand(1,1000));?>">
</head>
<body>
	<table id="header" class="card">
		<td><img src="assets/img/icon.png" alt="FNaF Wiki Icon" id="logo"></td>
		<td id="title">FNaFWiki</td>
		<td id="nav">
			<table id="nav-table">
				<?php
					for($i = 0; $i < count($navItems); $i++) {
						$item = $navItems[$i];
						if ($item['connected_name'] === NULL) {
							if ($item['name'] === 'Accueil') {
							echo '<td><a href="index.php">' . $item['name'] . '</a></td>';
							
						} else {
							echo '<td><a href="page.php?name=' . urlencode($item['name']) . '">' . $item['name'] . '</a></td>';
							echo '<table>';
							for($j = 0; $j < count($navItems); $j++) {
								$subItem = $navItems[$j];
								if ($subItem['connected_name'] === $item['name']) {
									echo '<tr><td><a href="page.php?name=' . urlencode($subItem['name']) . '">' . $subItem['name'] . '</a></td></tr>';
								}
							}
							echo '</table>';
						}
						}
						
					}
				?>
				<td><a href="index.php">Accueil</a></td>
				<td><a href="page.php?name=Jeux vidéo">Jeux vidéo</a></td>
				<td><a href="page.php?name=Livres">Livres</a></td>
				<td><a href="page.php?name=Films">Films</a></td>
				<td><a href="page.php?name=Theories">Theories</a></td>
			</table>
		</td>
	</table>