<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:23:49
         compiled from "/homepages/37/d619410358/htdocs/developer/template/box_datetime.html" */ ?>
<?php /*%%SmartyHeaderCode:15294129705778af75d634f6-07426748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43730b8eba7b3fa98dd82169e9130954781147cb' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/box_datetime.html',
      1 => 1466056144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15294129705778af75d634f6-07426748',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af75d7a564_51361063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af75d7a564_51361063')) {function content_5778af75d7a564_51361063($_smarty_tpl) {?><?php if (!is_callable('smarty_block_mybox')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.mybox.php';
?>                <?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"col3_123",'title'=>"Today's Date",'class'=>"box-one box-gray")); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"col3_123",'title'=>"Today's Date",'class'=>"box-one box-gray"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div align="center" style="font-size:10pt;margin:4px;">
                            <p id="myDate">
                            </p>
                            <p id="myTime" style="font-weight:bold">
                            </p>
                        </div>
                        
                        
                        <?php echo '<script'; ?>
 language="javascript">
							window.setInterval("myTimeShow()", 1000);
							myTimeShow();
							
							
							function myTimeShow(){
								var d = new Date();
   								el('myTime').innerHTML= myDateFormat(d,'time');
   								el('myDate').innerHTML= myDateFormat(d,'date');
   							}
						<?php echo '</script'; ?>
>
                        
                        
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"col3_123",'title'=>"Today's Date",'class'=>"box-one box-gray"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
		
<?php }} ?>
