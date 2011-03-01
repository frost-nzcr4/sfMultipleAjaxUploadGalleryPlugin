<?php use_helper('I18N', 'Date') ?>
<?php include_partial('gallery/assets') ?>
<?php use_javascript("../sfMultipleAjaxUploadGalleryPlugin/js/jquery/jquery-1.4.4.js") ?>
<?php use_javascript("../sfMultipleAjaxUploadGalleryPlugin/js/nicEdit.js") ?>
<?php use_javascript("../sfMultipleAjaxUploadGalleryPlugin/js/jquery/jquery-ui-1.8.10.custom.min.js") ?>
<?php use_stylesheet("../sfMultipleAjaxUploadGalleryPlugin/css/jquery-ui-1.8.10.custom.css") ?>
<script>
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
<div id="sf_admin_container">
  <h1><?php echo __('Modifier une galerie', array(), 'messages') ?></h1>

  <?php include_partial('gallery/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('gallery/form_header', array('gallery' => $gallery, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('gallery/form', array('gallery' => $gallery, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('gallery/form_footer', array('gallery' => $gallery, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
