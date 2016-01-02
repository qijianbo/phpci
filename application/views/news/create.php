<!--
<script type = "text/javascript"
        src = "http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>
-->
<body>
<h2><?php echo $title ; ?></h2>
<?php echo validation_errors();?>
<?php //echo form_open('/news/create'); ?>
<form action="/news/create" method="post">
    <label for="title" >Username:</label>
    <input type="title" name="title" /><br />

    <label for="text">Password:</label>
    <input type="text" name="text" /><br />
    <!-- <textarea type="text" name="text"></textarea><br /> -->

    <input type="submit" name="sublimt" value="Log in" />
</form>
