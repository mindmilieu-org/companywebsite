<body>
<div><?php include('menu.php');?></div>
<div><?php include($page_content);?></div>
<div><?php include('footer.php');?></div>
</body>

Second: Create a content piece, for example about_text.php.
<p>This is information about me.</p>

Third: Create the page with the actual name you want to use:
<?php
$page_content = 'about_text.php';
include('master.php');
?>