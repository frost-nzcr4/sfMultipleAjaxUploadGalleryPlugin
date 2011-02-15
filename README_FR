/************************************************************************************************************************
 * sfMultipleAjaxUploadGalleryPlugin											*
 * FR :															*
 *     Ce plugin génère un module de gestion de galeries avec un uploader multiple de photos.				*
 *     Support de l'internationalisation ( EN - FR)									*
*************************************************************************************************************************/
/************************************************************************************************************************
* Prérequis														*
* 	Pour la manipulation des images, vous devez avoir soit installé la librairie GD, soit imagemagick		*
*************************************************************************************************************************/
__________________________________________________________________________________________________________________________
/*************************************************************************************************************************
* TUTORIEL : vous pourrez bientôt suivre le screencast (vidéo) ici : 							 *
*	http://www.vimeo.com/sisko/sfMultipleAjaxUploadGalleryPlugin 							 *
* 	   vous pouvez suivre les instructions ci-dessous.								 *
* 	   Vous pouvez suivre les instructions et poser vos questions ici :						 *
* 	http://www.leny-bernard.com/fr/blog/show/sfMultipleAjaxUploadGalleryPlugin							 *
**************************************************************************************************************************/

FR:
Installation: ____________________________________________________________

Pour installer le plugin, tapez une de ces deux commandes :

		plugin:install sfMultipleAjaxUploadGalleryPlugin
					OR
		plugin:install http://http://www.leny-bernard.com/uploads/plugins/sfMultipleAjaxUploadGalleryPlugin
					OR
		Téléchargez le fichier http://www.leny-bernard.com/uploads/plugins/sfMultipleAjaxUploadGalleryPlugin.zip
		Puis décompréssez le dans le répertoire plugins de votre projet
		enfin tapez dans la console symfony plugin:install sfMultipleAjaxUploadGalleryPlugin

Récuperez les ressources du plugin en tapant : 
	symfony publish-assets
Videz ensuite le cache :
	symfony cc

Une dernière chose à faire consiste à activer les modules qu'inclus le plugin, à savoir gallery et photos dans l'application backend et portfolio dans l'application frontend, dans le fichier settings.yml présent dans le dossier de configuration de l'application en question.
/apps/backend/settings.yml
Vous devez entrer si elle n'existe pas déjà cette ligne :
	
	all:  
	  .settings:
	    enabled_modules: [gallery, photos]

Si elle existe déjà, vous devez juste ajouter dans la liste les modules gallery et photos comme indiqué ci-dessous :

 	all:  
	  .settings:
	    enabled_modules: [mesAutresModule, gallery, photos]

/apps/frontend/settings.yml
Vous devez entrer si elle n'existe pas déjà cette ligne :
	
	all:  
	  .settings:
	    enabled_modules: [portfolio]

Si elle existe déjà, vous devez juste ajouter dans la liste le module portfolio comme indiqué ci-dessous :

 	all:  
	  .settings:
	    enabled_modules: [mesAutresModule, portfolio]

Vous pouvez désormais accéder au module de gestion de galeries en tapant la route normale pour l'accès à un module, par défaut : /backend.php/gallery
Le plugin est parametrable à souhait.
Ainsi, vous pouvez :

# choisir les différentes tailles que vous voulez pour vos miniatures.
  sfMultipleAjaxUploadGalleryPlugin:
    thumbnails_sizes:
      - 50
      - 150
      - 300

# choisir la taille de la miniature par défaut :
  sfMultipleAjaxUploadGalleryPlugin:
    default_size: 50 # default, if not in thumbnails_sizes array new thumbnail is created

# Choisir la taille des miniatures dans le portfolio :
  sfMultipleAjaxUploadGalleryPlugin:
    portfolio_thumbnails_size: 150

# Choisir le comportement lors de la suppréssion d'une galerie
  sfMultipleAjaxUploadGalleryPlugin:
    onDelete: cascade # none or cascade, cascade remove all gallery's files

# l'emplacement des galeries :
  sfMultipleAjaxUploadGalleryPlugin:
    path_gallery: <?php echo sfConfig::get("sf_upload_dir")."/gallery/" ;?>

Le plugin utilise une librairie externe (GD est parametré par défaut, mais vous pouvez totalement utiliser imagemagick à la place) pour enregistrer vos photos dans des tailles d'images différentes : {par défaut : 50px, 150px, 300px, taille orignale}.
