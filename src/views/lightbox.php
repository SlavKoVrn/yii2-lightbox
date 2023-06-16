<?php 
$first=true;
foreach($images as $image){
	if ($first){
		$first=false;
		$vid='';
	}else
		$vid='style="display:none"';
	?>
    <a href="<?= $image['src'] ?>" data-lightbox="<?= $id ?>" data-title="<?= $image['title'] ?>" <?= $vid ?> >
        <img height="<?= $height ?>" width="<?= $width ?>" src="<?= $image['thumb'] ?>" alt="<?= $image['title'] ?>" />
	</a>
<?php } ?>
    
