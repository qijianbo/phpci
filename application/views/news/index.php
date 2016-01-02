<h2><?php echo $title ;?></h2>
<?php foreach ($news as $news_item):?>
    <h3><?php echo $news_item['title'];?></h3>
    <div class="main">
        <?php echo $news_item['text'];?>
    </div>
    <p><a href="<?php  echo  'news/view/'.$news_item['slug'];?>">view article(阅读全文)</a></P> 
<!-- <p><a href = "$news_item['slug']">阅读全文</a></p> -->
<?php endforeach; ?>


