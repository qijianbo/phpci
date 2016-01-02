
<h1>Named.conf</h1>
<?php foreach($my_list as $item):?>
<b><?php echo "</br>$item";?></b>
<b><a href="<?php echo '/dns/viewnamed/' .$item; ?>"> view </a></b>
<b><a href="<?php echo '/dns/editnamed/' .$item; ?>"> edit </a></b>
<?php endforeach; ?>