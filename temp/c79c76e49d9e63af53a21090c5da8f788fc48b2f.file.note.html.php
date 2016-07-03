<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:55:33
         compiled from "/homepages/37/d619410358/htdocs/developer/template/fields/note.html" */ ?>
<?php /*%%SmartyHeaderCode:10448969165778b6e55a3af8-38000169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c79c76e49d9e63af53a21090c5da8f788fc48b2f' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/fields/note.html',
      1 => 1466056147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10448969165778b6e55a3af8-38000169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comments' => 0,
    'noteHTML' => 0,
    'note' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b6e55c4290_57731833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b6e55c4290_57731833')) {function content_5778b6e55c4290_57731833($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['comments']->value) {?><span class="fieldComments"><?php echo $_smarty_tpl->tpl_vars['comments']->value;?>
</span><?php }?>

<?php if ($_smarty_tpl->tpl_vars['noteHTML']->value) {
echo $_smarty_tpl->tpl_vars['noteHTML']->value;
}?>

<?php if ($_smarty_tpl->tpl_vars['note']->value) {?>
<span class="help_icon"
	onmouseover="tooltip.show('<div style=\'max-width:300px\' class=\'wrap\'><?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['note']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8', true);?>
</div>');" 
	onmouseout="tooltip.hide();"
>&nbsp;</span>
<?php }?><?php }} ?>
