sfMultipleAjaxUploadGalleryPlugin v1.1.4
========================================

This plugin generates a gallery management module with an ajax multiple photo
uploader.

After installation you can access:

    * frontend:
        /portfolios - to view all galleries
    
    * backend:
        /gallery - to manipulating with galleries

Note:
    All available routes stored in sfMultipleAjaxUploadGalleryPlugin/config/doctrine/routing.yml

Internationalization supports (En - Fr)

Requirements
------------

1. To manipulate pictures, you have to install on your server the GD library or
  imagemagick.

2. JavaScript libraries:
    - jQuery
    - Galleriffic

Tutorial
--------

1. you can watch a screencast here: [Video](http://www.vimeo.com/sisko/sfMultipleAjaxUploadGalleryPlugin)
2. you can follow the instructions below
3. you can follow the instructions on [Leny Bernard website](http://www.leny-bernard.com/en/blog/show/sfMultipleAjaxUploadGalleryPlugin)                                    

Installation
------------

In order to install the plugin sfMultipleAjaxUploadGalleryPlugin:
Type one of these symfony commands:

    plugin:install sfMultipleAjaxUploadGalleryPlugin

OR

Download the file [here](http://www.leny-bernard.com/uploads/plugins/sfMultipleAjaxUploadGalleryPlugin.zip)

Then extract its content in the plugins directory of your project :

    plugin:install sfMultipleAjaxUploadGalleryPlugin

Get the plugin's resources by typing:

    symfony publish-assets

Then clear the cache:

    `symfony cc` or `symfony cache:clear`

A last task to do is to enable the gallery and photos modules (backend) and the
portfolio module (frontend) in the settings.yml specific app config's folder.

You have to enter folowing lines if its doesn't already exist

    # /apps/backend/settings.yml
    all:
      .settings:
        enabled_modules: [gallery, photos]

If it does exists, you just have to add in the list the gallery module like below:

    # /apps/backend/settings.yml
    all:
      .settings:
        enabled_modules: [myOthersModule, gallery, photos]

same procedure that before

    # /apps/frontend/settings.yml
    all:  
      .settings:
        enabled_modules: [portfolio]

----------- or -----

    # /apps/frontend/settings.yml
    all:  
      .settings:
        enabled_modules: [myOthersModule, portfolio]

You can now access to the gallery and get its awesome functionnalities.
The plugin is customizable. So you can :

# choose the different sizes that you want for your thumbnails :

    sfMultipleAjaxUploadGalleryPlugin:
      thumbnails_sizes:
        - 50
        - 150
        - 300

# choose the default thumbnail size:

    sfMultipleAjaxUploadGalleryPlugin:
      default_size: 50 # default, if not in thumbnails_sizes array new thumbnail is created

# Choose the portfolio thumbnail and full image sizes:

    sfMultipleAjaxUploadGalleryPlugin:
      portfolio_thumbnails_size: 150
      portfolio_full_size: 300

# Chose the behavior when deleting a gallery:

    sfMultipleAjaxUploadGalleryPlugin:
      onDelete: cascade # none or cascade, cascade remove all gallery's photos

# the galleries path:

    sfMultipleAjaxUploadGalleryPlugin:
      path_gallery: <?php echo sfConfig::get("sf_upload_dir")."/gallery/" ;?>

The plugin use an extern library (GD is set by default but you can totally use
imagemagick instead) in order to save your photos in some widths {by default:
50px, 150px, 300px, orignal size}

![alt text](http://www.operationcaribou.com/uploads/thumbnail/50_DSCN8144.JPG "50")
![alt text](http://www.operationcaribou.com/uploads/thumbnail/150_DSCN8144.JPG "150")
![alt text](http://www.operationcaribou.com/uploads/thumbnail/300_DSCN8144.JPG "300")
