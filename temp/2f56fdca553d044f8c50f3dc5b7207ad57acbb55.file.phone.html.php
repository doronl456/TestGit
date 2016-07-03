<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/phone.html" */ ?>
<?php /*%%SmartyHeaderCode:18956404685778b6e5136d31-80097844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f56fdca553d044f8c50f3dc5b7207ad57acbb55' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/leads/fieldtypes_view/phone.html',
      1 => 1466056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18956404685778b6e5136d31-80097844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e515b115_48126005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e515b115_48126005')) {function content_5778b6e515b115_48126005($_smarty_tpl) {?><?php if (!is_callable('smarty_function_my_call')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.my_call.php';
?>
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
<input type="text" readonly="readonly" style='width:160px' class="inpWide" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"/>
<!--add tehila-->
<?php echo smarty_function_my_call(array('phone'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
    <?php }} ?>
