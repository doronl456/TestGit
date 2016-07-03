<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:51:16
         compiled from "/homepages/37/d619410358/htdocs/developer/template/navigation/mcasearch_block.html" */ ?>
<?php /*%%SmartyHeaderCode:18733759035778b5e479e3f5-79449287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63980ff7a15df8cfaf503a7937e8605764acb5cd' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/navigation/mcasearch_block.html',
      1 => 1466056149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18733759035778b5e479e3f5-79449287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mcasearch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778b5e47cc351_66524193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778b5e47cc351_66524193')) {function content_5778b5e47cc351_66524193($_smarty_tpl) {?><?php if (!is_callable('smarty_function_func')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.func.php';
?>	<?php echo smarty_function_func(array('name'=>'MCASearchBoxData','var'=>'mcasearch'),$_smarty_tpl);?>
		
    <form method="get" action="/cashadvance.php">
    <input type="hidden" name="cmd" value="search" />
    <table cellspacing="0" cellpadding="0" width="100%" border="0" class="leftNavTable">
      <col class="col1" />
      <col class="col2" />

        <tr class="menuitemsub_k">
    	<td colspan="2">
    	
    	<table style="width:178px" border="0" cellspacing="0" cellpadding="0">
    	<tr>
    	<td style='width:138px;padding:0px 2px 0px 4px;vertical-align:middle'><input type="text" name="str" style='width:138px' value="<?php echo $_smarty_tpl->tpl_vars['mcasearch']->value['MCASearchStr'];?>
" title="Search by DBA Name, Legal Name or Contract #"></td>
    	<td style='width:30px; padding:0px 2px 0px 2px;vertical-align:middle'><input style='width:25px;padding:1px;' type="submit" value="Go" /></td></tr></table>      </td>
        </tr>
        <tr class="menuitemsub_k" 
                          >
          <td colspan="2" style='width:178px;padding:0px 2px 0px 4px;'><select style='width:170px' name="SearchType">
    		<option value="BusinessName"  <?php if ($_smarty_tpl->tpl_vars['mcasearch']->value['MCASearchType']=='BusinessName') {?>selected<?php }?> >DBA Name</option>
    		<option value="CorporateName" <?php if ($_smarty_tpl->tpl_vars['mcasearch']->value['MCASearchType']=='CorporateName') {?>selected<?php }?> >Legal Name</option>
    		<option value="OwnerName" <?php if ($_smarty_tpl->tpl_vars['mcasearch']->value['MCASearchType']=='OwnerName') {?>selected<?php }?> >Owner Name</option>
    		<option value="ContactName" <?php if ($_smarty_tpl->tpl_vars['mcasearch']->value['MCASearchType']=='ContactName') {?>selected<?php }?> >Contact Name</option>
    		<option value="MID" <?php if ($_smarty_tpl->tpl_vars['mcasearch']->value['MCASearchType']=='MID') {?>selected<?php }?> >MID</option>
    		<option value="cashadv_id" <?php if ($_smarty_tpl->tpl_vars['mcasearch']->value['MCASearchType']=='cashadv_id') {?>selected<?php }?> >Contract #</option>
    	  </select> </td>
        </tr>
    </table>
    </form>
<?php }} ?>
