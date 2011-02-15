<?php

/**
 * PluginPhotos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sfMultipleAjaxUploadGalleryPlugin
 * @subpackage model
 * @author     leny
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class PluginPhotos extends BasePhotos
{
    public function save(Doctrine_Connection $conn = null) {
        parent::save($conn);

        $filename = $this->getPicpath();
        $ext = explode(".", $filename);
        $ext = $ext[count($ext)-1];
        $ext = strtolower($ext);

        $img = new sfImage(sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_path_gallery").$this->getGalleryId().'/'.$filename, 'image/'.$ext);
        $w = $img->getWidth();
        $h = $img->getHeight();
        $sizes = sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_thumbnails_sizes");
        if(in_array($sizes, sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_default_size")))
        {
            $sizes[] = sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_default_size");
        }
        arsort($sizes,SORT_DESC);
        foreach($sizes as $size)
        {
            if(is_numeric($size))
            {
                $x = (int)($w/$h*$size);
                $img->resize($x,$size);
                $img->setQuality(100);
                $dir = sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_path_gallery").$this->getGalleryId().'/'.$size;
                if(!is_dir($dir)) mkdir ($dir);
                $img->saveAs($dir.'/'.$filename, 'image/'.$ext);
            }
        }
    }
    public function  delete(Doctrine_Connection $conn = null) {
        parent::delete($conn);
        $filename = $this->getPicpath();

        unlink(sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_path_gallery").$this->getGalleryId().'/'.$filename);
        foreach (sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_thumbnails_sizes") as $size)
        {
            unlink(sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_path_gallery").$this->getGalleryId().'/'.$size.'/'.$filename);
        }
    }

  public function isDefault()
  {
    return (bool) $this->getIsDefault();
  }
}
