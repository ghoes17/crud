<?php
include 'conn.php';
include 'conf.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport"
content="width=device-width, initial-scale=1.0">
<title>PDO CRUDSRUD</title>
<link rel="stylesheet" type="text/css" href="Assets/CSS/css.css">
</head>
<body>
<div class="top-gray"></div>
<div class="header">
<div class="big-logo">SMKN 10 Jakarta</div>
<?php include 'menu.php';?>
</div>
<div class="content">
<div class="container">
<?php
if(!is_null(get('p'))){
switch (get('p')) {
case 'home':
inc('home');
break;
	case 'sekolah':
		switch (get('m')) {
			case 'home':
				inc('Display/School/all');
			break;
			case 'add':
				inc('School/School/add');
			break;
			case 'edit':
				inc('School/School/edit');
			break;
			default:
				inc('Display/School/all');
			break;
			}
break;
//buat case Vocational baru
	case 'jurusan':
		switch (get('m')) {
			case 'home':
				inc('Display/Vocational/all');
			break;
			case 'add':
				inc('Display/Vocational/add');
			break;
			case 'edit':
				inc('Display/Vocational/edit');
			break;
			default:
				inc('Display/Vocational/all');
			break;
			}
break;
case 'addnews':
				inc('Display/News/add');
			break;
			
default:
inc('home');
break;
}
}else{ inc('home'); } ?>
</div>
</div>
</body>
</html>