<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:24:10
         compiled from "/homepages/37/d619410358/htdocs/developer/template/menu_bar.html" */ ?>
<?php /*%%SmartyHeaderCode:10553783345778af8a589c91-35859661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '461c7f1dffa3e3057c2bdb81f60a8ee95cf8cfff' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/menu_bar.html',
      1 => 1466056145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10553783345778af8a589c91-35859661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_id' => 0,
    'menudata' => 0,
    'topitem' => 0,
    'topkey' => 0,
    'item' => 0,
    'keysec' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af8a5cee41_83131062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af8a5cee41_83131062')) {function content_5778af8a5cee41_83131062($_smarty_tpl) {?><?php if (!is_callable('smarty_function_func')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.func.php';
?>


<?php echo '<script'; ?>
>

function divTopMenuMouseover(key, isSubmenu){
	el('div1TopMenu_'+key).className='div1TopMenuUp';
    if(isSubmenu){
		el('div2TopMenu_'+key).className='div2TopMenuShow';
	}

}

function divTopMenuMouseout(key){
	el('div1TopMenu_'+key).className='div1TopMenu';
	el('div2TopMenu_'+key).className='div2TopMenuHide';
}
<?php echo '</script'; ?>
>



<div align="center">
<table class="topMenuTable" border="0" cellspacing="0" cellpadding="0"  style="" >
  <tr>
	<td>
	  <div class="myTopMenuSeparator"></div>
	</td>
<?php echo smarty_function_func(array('name'=>'MainMenuData','var'=>'menudata','menu_id'=>$_smarty_tpl->tpl_vars['menu_id']->value),$_smarty_tpl);?>


<?php  $_smarty_tpl->tpl_vars['topitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topitem']->_loop = false;
 $_smarty_tpl->tpl_vars['topkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menudata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topitem']->key => $_smarty_tpl->tpl_vars['topitem']->value) {
$_smarty_tpl->tpl_vars['topitem']->_loop = true;
 $_smarty_tpl->tpl_vars['topkey']->value = $_smarty_tpl->tpl_vars['topitem']->key;
?>
    <td valign="middle">
	

<div class="myTopMenuHolder" 
	<?php if ($_smarty_tpl->tpl_vars['topitem']->value['menu']) {?> 
		onmouseover="divTopMenuMouseover('<?php echo $_smarty_tpl->tpl_vars['topkey']->value;?>
',1)" 
	<?php } else { ?> 
		onmouseover="divTopMenuMouseover('<?php echo $_smarty_tpl->tpl_vars['topkey']->value;?>
',0)" 
	<?php }?>
	onmouseout="divTopMenuMouseout('<?php echo $_smarty_tpl->tpl_vars['topkey']->value;?>
')"
	>
	<div id="div1TopMenu_<?php echo $_smarty_tpl->tpl_vars['topkey']->value;?>
" class="div1TopMenu" 
		onclick="<?php if ($_smarty_tpl->tpl_vars['item']->value['window']) {?> window.open('<?php echo $_smarty_tpl->tpl_vars['topitem']->value['url'];?>
')  <?php } else { ?> document.location.href='<?php echo $_smarty_tpl->tpl_vars['topitem']->value['url'];?>
' <?php }?>"
		><?php echo $_smarty_tpl->tpl_vars['topitem']->value['title'];?>
</div>

<div style='position:relative'><div id="div2TopMenu_<?php echo $_smarty_tpl->tpl_vars['topkey']->value;?>
" class="div2TopMenuHide">
  <table class="tblTopMenuDrop" width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['keysec'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['topitem']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['keysec']->value = $_smarty_tpl->tpl_vars['items']->key;
?>	
      <td align="left" style='width:200px;' valign="top"><div class="topMenuCol<?php echo $_smarty_tpl->tpl_vars['keysec']->value;?>
">
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  	<?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='header') {?>
	  <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
	<?php } else { ?>
    <div class="myTopMenuItem" onmouseover="this.className='myTopMenuItemUp'" onmouseout="this.className='myTopMenuItem'"  onclick="<?php if ($_smarty_tpl->tpl_vars['item']->value['onclick']) {
echo $_smarty_tpl->tpl_vars['item']->value['onclick'];?>
 <?php } else { ?> document.location.href='<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
' <?php }?>">
	<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];
if ($_smarty_tpl->tpl_vars['item']->value['showCnt']) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['item']->value['cntValue'];?>
)<?php }?>
	</div>
	<?php }?>
  <?php } ?>	  

	  </div></td>
<?php } ?>    
</tr>
  </table>
  </div></div>
</div>
	
</td>
<td>
  <div class="myTopMenuSeparator"></div>
</td>
<?php } ?> 


	
  </tr>
</table>
</div>
<?php }} ?>
