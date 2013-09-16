<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:19
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176167097551d6ba3f9388f6-15135167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a166986eef33ab3c8ab85adef840201b970379b0' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/header.tpl',
      1 => 1373026803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176167097551d6ba3f9388f6-15135167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'meta_language' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'content_dir' => 0,
    'base_uri' => 0,
    'static_token' => 0,
    'token' => 0,
    'priceDisplayPrecision' => 0,
    'currency' => 0,
    'priceDisplay' => 0,
    'roundMode' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_files' => 0,
    'js_uri' => 0,
    'HOOK_HEADER' => 0,
    'page_name' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_TOP' => 0,
    'HOOK_LEFT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3fb25412_42950567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3fb25412_42950567')) {function content_51d6ba3fb25412_42950567($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">	

<head>		
<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8');?>
</title>

<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value){?>		
<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'html', 'UTF-8');?>
" />
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value){?>		
<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'html', 'UTF-8');?>
" />
<?php }?>	
	
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />		
<meta http-equiv="content-language" content="<?php echo $_smarty_tpl->tpl_vars['meta_language']->value;?>
" />		
<meta name="generator" content="PrestaShop" />		
<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value){?>no<?php }?>follow" />		
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />		
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />	
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>	 


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready( function () {
    // On cache les sous-menus :
    $(".navigation div.subMenu").hide();
    // On sélectionne tous les items de liste portant la classe "toggleSubMenu"

    // et on remplace l'élément span qu'ils contiennent par un lien :
    $(".navigation div.toggleSubMenu span").each( function () {
        // On stocke le contenu du span :
        var TexteSpan = $(this).text();
        $(this).replaceWith('<a href="" title="Afficher le sous-menu"><h4>' + TexteSpan + '</h4><\/a>') ;
    } ) ;

    // On modifie l'évènement "click" sur les liens dans les items de liste
    // qui portent la classe "toggleSubMenu" :
    $(".navigation div.toggleSubMenu > a").click( function () {
        // Si le sous-menu était déjà ouvert, on le referme :
        if ($(this).next("div.subMenu:visible").length != 0) {
            $(this).next("div.subMenu").slideUp("normal");
        }
        // Si le sous-menu est caché, on ferme les autres et on l'affiche :
        else {
            $(".navigation div.subMenu").slideUp("normal");
            $(this).next("div.subMenu").slideDown("normal");
        }
        // On empêche le navigateur de suivre le lien :
        return false;
    });    


} ) ;
</script>   

<script type="text/javascript">			
var baseDir = '<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
';			
var baseUri = '<?php echo $_smarty_tpl->tpl_vars['base_uri']->value;?>
';			
var static_token = '<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
';			
var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';			
var priceDisplayPrecision = <?php echo $_smarty_tpl->tpl_vars['priceDisplayPrecision']->value*$_smarty_tpl->tpl_vars['currency']->value->decimals;?>
;			
var priceDisplayMethod = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;			
var roundMode = <?php echo $_smarty_tpl->tpl_vars['roundMode']->value;?>
;		
</script>	  

<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>	

<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />	
<?php } ?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)){?>
	
<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>	
<?php } ?> 	

<?php }?>		

<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>
	
</head>		

<body <?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?>id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'htmlall', 'UTF-8');?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value){?>hide-left-column<?php }?> <?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value){?>hide-right-column<?php }?>">	

<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>	
	
<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value){?>	
<div id="restricted-country">
<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>		
</div>		
<?php }?>		

<div id="header_court">
<div id="page_header">

<!-- Header -->			

<div id="header">		
 

<div id="header_right">	
	
<a id="header_logo" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
">					
<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value){?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value){?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
" <?php }?> />				
</a> 				
<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>
			
</div>			
</div>

</div>	
</div>

			
<div id="page" class="container_9 clearfix">

<div id="columns" class="grid_9 alpha omega clearfix">				

<!-- Left -->				

<div id="left_column" class="column grid_2 alpha">					
<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
				
</div>				

<!-- Center -->
<div id="center_column" class="<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>grid_9<?php }else{ ?>grid_5<?php }?>">
<?php }?><?php }} ?>