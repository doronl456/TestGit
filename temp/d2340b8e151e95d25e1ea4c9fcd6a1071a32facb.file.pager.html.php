<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:24:09
         compiled from "/homepages/37/d619410358/htdocs/developer/template/pager.html" */ ?>
<?php /*%%SmartyHeaderCode:19193679535778af89cba639-56952198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2340b8e151e95d25e1ea4c9fcd6a1071a32facb' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/pager.html',
      1 => 1466056145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19193679535778af89cba639-56952198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af89d2bdf7_71019060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af89d2bdf7_71019060')) {function content_5778af89d2bdf7_71019060($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
if (!is_callable('smarty_function_query_string')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.query_string.php';
?><?php echo smarty_function_js_include(array('src'=>'/css/pager.css'),$_smarty_tpl);?>




  <ul class="paginate pag2 clearfix">

  
  
	<?php if ($_smarty_tpl->tpl_vars['pager']->value['prevPage']) {?>
 		<li><a href="?<?php echo smarty_function_query_string(array('listId'=>$_smarty_tpl->tpl_vars['pager']->value['listId'],'page'=>1),$_smarty_tpl);?>
" class="act">Start</a></li>
  		<li><a href="?<?php echo smarty_function_query_string(array('listId'=>$_smarty_tpl->tpl_vars['pager']->value['listId'],'page'=>$_smarty_tpl->tpl_vars['pager']->value['prevPage']),$_smarty_tpl);?>
" class="act">Prev</a></li>
  	<?php } else { ?>
 		<li><a href="javascript:;" class="dis">Start</a></li>
  		<li><a href="javascript:;" class="dis">Prev</a></li>
  	<?php }?>
  	
  		<li class="single numrows">(<?php echo $_smarty_tpl->tpl_vars['pager']->value['from'];?>
 - <?php echo $_smarty_tpl->tpl_vars['pager']->value['to'];?>
 of <?php echo $_smarty_tpl->tpl_vars['pager']->value['totalRows'];?>
)</li>
  
  	<?php if ($_smarty_tpl->tpl_vars['pager']->value['nextPage']) {?> 
  		<li><a href="?<?php echo smarty_function_query_string(array('listId'=>$_smarty_tpl->tpl_vars['pager']->value['listId'],'page'=>$_smarty_tpl->tpl_vars['pager']->value['nextPage']),$_smarty_tpl);?>
" class="act">Next</a></li>
  		<li><a href="?<?php echo smarty_function_query_string(array('listId'=>$_smarty_tpl->tpl_vars['pager']->value['listId'],'page'=>$_smarty_tpl->tpl_vars['pager']->value['totalPages']),$_smarty_tpl);?>
" class="act">End</a></li>
  <?php } else { ?> 
  		<li><a href="javascript:;" class="dis">Next</a></li>
  		<li><a href="javascript:;" class="dis">End</a></li>
  <?php }?> 
  

        <li class="single"></li>


  <li><a href="?<?php echo smarty_function_query_string(array('listId'=>$_smarty_tpl->tpl_vars['pager']->value['listId'],'perPage'=>25),$_smarty_tpl);?>
">25</a></li>
  <li><a href="?<?php echo smarty_function_query_string(array('listId'=>$_smarty_tpl->tpl_vars['pager']->value['listId'],'perPage'=>50),$_smarty_tpl);?>
">50</a></li>
  <li><a href="?<?php echo smarty_function_query_string(array('listId'=>$_smarty_tpl->tpl_vars['pager']->value['listId'],'perPage'=>100),$_smarty_tpl);?>
">100</a></li>
  <li><a href="?<?php echo smarty_function_query_string(array('listId'=>$_smarty_tpl->tpl_vars['pager']->value['listId'],'perPage'=>500),$_smarty_tpl);?>
">500</a></li>
  <?php if ($_smarty_tpl->tpl_vars['pager']->value['totalRows']>$_smarty_tpl->tpl_vars['pager']->value['displayRows']) {?>
  	<li><a href="?<?php echo smarty_function_query_string(array('listId'=>$_smarty_tpl->tpl_vars['pager']->value['listId'],'perPage'=>'ALL'),$_smarty_tpl);?>
" onclick="return confirm('If you choose to view ALL records on the same page, it could take up to 1 minute for the page to load.  For faster performance, we recommend viewing 500 records at a time.  Do you still want to proceed?')">All</a></li>
  <?php } else { ?> 
  	<li><a href="javascript:;" class="dis">All</a></li> 
  <?php }?>  
  </ul>


<?php }} ?>
