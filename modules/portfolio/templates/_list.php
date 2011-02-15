<?php $galleries = Gallery::getAllGalleries() ?>

<div>
    <?php slot('h1') ?>
    Liste des Portfolios
    <?php end_slot() ?>

    <?php foreach ($galleries as $i=>$gallery): ?>
    <div class="cont">
        <div>
		<a class="title" href="<?php echo url_for(@showGallery, $gallery) ?>">
                	<h3><?php echo $gallery->getTitle() ?></h3>
		</a>
	</div>
        <div>
		<a href="<?php echo url_for(@showGallery, $gallery) ?>">
                    <?php 
                    $uploadDir = sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_path_gallery");
                    $webDir = sfConfig::get("sf_web_dir");
                    $correctPath = substr($uploadDir, strlen($webDir), strlen($uploadDir)-strlen($webDir)); ?>
                	<img src="<?php echo $correctPath."/".$gallery->getId()."/".
				sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_portfolio_thumbnails_size")."/".$gallery->getPhotoDefault()->getPicpath() ?>"/>
            	</a>
	</div>
    </div>
    <?php endforeach; ?>
</div>
<?php echo count($galleries) >= 4 ? '<div class="clear"></div>' : ""; ?>
