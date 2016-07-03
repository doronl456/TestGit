<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/fields/field_num9.html" */ ?>
<?php /*%%SmartyHeaderCode:20092362045778b6e57ccef4-74790206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '392ef6e12a7a25ebfc77e9185764296dd3d54236' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/fields/field_num9.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20092362045778b6e57ccef4-74790206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'value' => 0,
    'comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e57e9556_02729531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e57e9556_02729531')) {function content_5778b6e57e9556_02729531($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_money')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.money.php';
?><div  class="d1" >
  <div class="fldTitle"><?php echo $_smarty_tpl->getSubTemplate ('fields/req.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
    <input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="text" value="<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['value']->value);?>
" style='width:80px;text-align:right' maxlength="" />
    <?php if (!$_smarty_tpl->tpl_vars['comments']->value) {?><span class="fieldComments">($000,000,000)</span><?php }?>
  <?php echo $_smarty_tpl->getSubTemplate ('fields/note.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
