<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/fields/field_zip.html" */ ?>
<?php /*%%SmartyHeaderCode:18134297895778b6e575f052-89895967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad7eb660074a08731166162a145a733d84472c27' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/fields/field_zip.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18134297895778b6e575f052-89895967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e577b464_23448108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e577b464_23448108')) {function content_5778b6e577b464_23448108($_smarty_tpl) {?><div  class="d1" >
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php if (permitted('confEnableCanada')) {?> (Postal Code)<?php }?></div>
    <input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="text" class="fieldInputZip" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" maxlength="9"  maxlength_="" />
    &nbsp;<span class="fieldComments">(xxxxx) <?php if (permitted('confEnableCanada')) {?> / (xxx xxx)<?php }?></span>
  <?php echo $_smarty_tpl->getSubTemplate ('fields/note.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
