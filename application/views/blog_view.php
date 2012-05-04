<html>
<head>
<title><?php echo $title ?></title>
<body>
<h1><?php echo $heading; ?></h1>



<?php foreach($query->result() as $row): ?>

<h3><?=$row->title?></h3>
<p><?=$row->body?></p>

<p><?=anchor('blog/comments/'.$row->id, 'Comments');?></p>

<hr>

<?php endforeach; ?> 

</body>
</html>
