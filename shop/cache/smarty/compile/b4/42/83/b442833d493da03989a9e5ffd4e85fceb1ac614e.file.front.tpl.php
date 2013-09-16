<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:18
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/minicslider/views/templates/front/front.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124996007751d6ba3e651409-84429344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b442833d493da03989a9e5ffd4e85fceb1ac614e' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/minicslider/views/templates/front/front.tpl',
      1 => 1373026826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124996007751d6ba3e651409-84429344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'slides' => 0,
    'minicSlider' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3e79de16_59980366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3e79de16_59980366')) {function content_51d6ba3e79de16_59980366($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['slides']->value[$_smarty_tpl->tpl_vars['lang_iso']->value])!=0){?>
    <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['front']==1){?>
        <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
            <!-- MINIC SLIDER -->
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minicSlider']->value['tpl']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>
    <?php }else{ ?>
        <!-- MINIC SLIDER -->
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['minicSlider']->value['tpl']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?> 

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            effect: '<?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['current']!=''){?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['current'];?>
<?php }else{ ?>random<?php }?>', 
            slices: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['slices']!=''){?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['slices'];?>
<?php }else{ ?>15<?php }?>, 
            boxCols: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['slices']!=''){?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['cols'];?>
<?php }else{ ?>8<?php }?>, 
            boxRows: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['rows']!=''){?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['rows'];?>
<?php }else{ ?>4<?php }?>, 
            animSpeed: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['speed']!=''){?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['speed'];?>
<?php }else{ ?>500<?php }?>, 
            pauseTime: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['pause']!=''){?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['pause'];?>
<?php }else{ ?>3000<?php }?>, 
            startSlide: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['startSlide']!=''){?><?php echo $_smarty_tpl->tpl_vars['minicSlider']->value['options']['startSlide'];?>
<?php }else{ ?>0<?php }?>,
            directionNav: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['buttons']==1){?>true<?php }else{ ?>false<?php }?>, 
            controlNav: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['control']==1){?>true<?php }else{ ?>false<?php }?>, 
            controlNavThumbs: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['thumbnail']==1){?>true<?php }else{ ?>false<?php }?>,
            pauseOnHover: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['hover']==1){?>true<?php }else{ ?>false<?php }?>, 
            manualAdvance: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['manual']==1){?>true<?php }else{ ?>false<?php }?>, 
            prevText: '<?php echo smartyTranslate(array('s'=>'Prev'),$_smarty_tpl);?>
', 
            nextText: '<?php echo smartyTranslate(array('s'=>'Next'),$_smarty_tpl);?>
', 
            randomStart: <?php if ($_smarty_tpl->tpl_vars['minicSlider']->value['options']['random']==1){?>true<?php }else{ ?>false<?php }?>
        });
    });
    </script>   
<?php }?><?php }} ?>