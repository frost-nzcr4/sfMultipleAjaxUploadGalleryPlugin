<div id="<?php echo $contextual? "contextual_":"" ?>actions_<?php echo $photo->getId() ?>" <?php echo !$contextual?'class="photo_action_full"':"";?> style="display: none;">
    
<?php
$uploadDir = sfConfig::get('app_sfMultipleAjaxUploadGalleryPlugin_path_gallery');
$webDir = sfConfig::get("sf_web_dir");
$upload_gallery_path = substr($uploadDir, strlen($webDir), strlen($uploadDir) - strlen($webDir));
$sizes = sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_thumbnails_sizes");
foreach ($sizes as $i=>$size) {
    if($size>150){
        $size = $sizes[$i-1];
        break;
    }
}
?>

<div class="clear"></div>
<?php if(!$photo->getIsDefault()){ ?>
    <a href="#" onclick="ajaxPhotoEdition('<?php echo url_for('photo_ajax_default', $photo) ?>')" class="default"><img src="/sfMultipleAjaxUploadGalleryPlugin/images/setdefault.png" title="<?php echo __("Utiliser cette image comme photo de couverture");?>"/></a>
<?php } ?>
<?php if($contextual){ ?><a href="#" onclick="$('.photo_action_full').hide();$('#actions_<?php echo $photo->getId() ?>').toggle();" class="edit"><img src="/sfMultipleAjaxUploadGalleryPlugin/images/edit.png" title="<?php echo __("Modifier");?>"/></a><?php } ?>
<a href="#" onclick="ajaxPhotoEdition('<?php echo url_for('photo_ajax_delete', $photo) ?>')" class="delete"><img src="/sfMultipleAjaxUploadGalleryPlugin/images/trash.png" title="<?php echo __("Supprimer");?>"/></a>
<span class="requiresjcrop">
    <a href="#" id="disable" style="display:none;">Disable</a>
</span>
<a href="#" id="enable" style="display:none;">Re-Enable</a>
<a href="#" id="unhook" style="display:none;">Destroy!</a>
<a href="#" onclick="ajaxPhotoEdition('<?php echo url_for('photo_ajax_crop', $photo) ?>')" id="rehook" title="<?php echo __("Recadrez cette photo") ?>"><img style="width:16px" src="/sfMultipleAjaxUploadGalleryPlugin/images/crop.png"/></a>

<?php if(!$contextual){ ?>

<div style="float: left;margin-right: 5px">
    <img src="<?php echo $upload_gallery_path.$photo->getGallery()->getSlug()."/".$size."/".$photo->getPicpath(); ?>"/>
</div>
<div class="clear"></div>
<p>Indiquez la description pour l'image sélectionnée</p>
<input id="<?php echo $photo->getId()."_value" ?>" type="textarea" value="<?php echo $photo->getTitle() ?>"/>
<input onclick="saveTitle(<?php echo $photo->getId();?>)" type="button" value="OK"/>
<?php } ?>
</div>