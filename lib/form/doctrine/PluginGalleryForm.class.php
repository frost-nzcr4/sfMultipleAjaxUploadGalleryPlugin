<?php

/**
 * PluginGallery form.
 *
 * @package    sfMultipleAjaxUploadGalleryPlugin
 * @subpackage form
 * @author     leny
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginGalleryForm extends BaseGalleryForm
{
  public function setup()
  {
        parent::setup();
        $this->removeFields();
  }

    protected function removeFields() {
        unset(
                $this['created_at'], $this['updated_at']
        );
    }
}
