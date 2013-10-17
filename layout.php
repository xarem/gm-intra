<?php include("mysql.php"); ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>GM Intra :: <?php echo $layout_title; ?></title>
<link rel="stylesheet" type="text/css" media="all" href="style.css">
</head>
<body>
	<div class="m_title" align="center">
		<span class="m_title">GM Intra :: <?php echo $layout_title; ?></span>
	</div>
	<div class="m_bar" align ="center">
		<?php layout_navigation(); ?>
	</div>
	<div class="m_content">
		<?php layout_content(); ?>
	</div>
</body>
</html>