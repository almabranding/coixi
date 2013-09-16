<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:33
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/favoriteproducts/favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190527468951d6ba4d97a8f1-67693818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a9d5c74d6432d0ccfe0a5d603ce4a0cc2347539' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/favoriteproducts/favoriteproducts-extra.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190527468951d6ba4d97a8f1-67693818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'isLogged' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba4da0a178_04940654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba4da0a178_04940654')) {function content_51d6ba4da0a178_04940654($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>

<li id="favoriteproducts_block_extra_add" class="add">	
<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favadd-black-35.png" alt="Add" title="<?php echo smartyTranslate(array('s'=>'Add this product to my favorites','mod'=>'favoriteproducts'),$_smarty_tpl);?>
" width="35" height="35" onmouseover="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favadd-green-35.png';" onmouseout="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favadd-black-35.png';" />
</li>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>
<li id="favoriteproducts_block_extra_remove">
<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favrem-black-35.png" alt="Remove" title="<?php echo smartyTranslate(array('s'=>'Remove this product from my favorites','mod'=>'favoriteproducts'),$_smarty_tpl);?>
" width="35" height="35" onmouseover="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favrem-green-35.png';" onmouseout="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favrem-black-35.png';" />
</li>
<?php }?>

<li id="favoriteproducts_block_extra_added">	
<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favadd-black-35.png" alt="Add" title="<?php echo smartyTranslate(array('s'=>'Add this product to my favorites','mod'=>'favoriteproducts'),$_smarty_tpl);?>
" width="35" height="35" onmouseover="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favadd-green-35.png';" onmouseout="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favadd-black-35.png';" />
</li>

<li id="favoriteproducts_block_extra_removed">	
<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favrem-black-35.png" alt="Remove" title="<?php echo smartyTranslate(array('s'=>'Remove this product from my favorites','mod'=>'favoriteproducts'),$_smarty_tpl);?>
" width="35" height="35" onmouseover="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favrem-green-35.png';" onmouseout="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favrem-black-35.png';" />
</li><?php }} ?>