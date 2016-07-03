<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:24:10
         compiled from "/homepages/37/d619410358/htdocs/developer/template/page_template.html" */ ?>
<?php /*%%SmartyHeaderCode:15048087205778af8a0a9b85-93007107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532955d3cba76b80d5e349460deb997db5f60176' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/page_template.html',
      1 => 1466056145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15048087205778af8a0a9b85-93007107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGETITLE' => 0,
    'LoginInfo' => 0,
    'CONFIG' => 0,
    's' => 0,
    'tpldata' => 0,
    'contentsWide' => 0,
    'my' => 0,
    'contents' => 0,
    'BackupBoxData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af8a1aae99_91151934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af8a1aae99_91151934')) {function content_5778af8a1aae99_91151934($_smarty_tpl) {?><?php if (!is_callable('smarty_function_func')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.func.php';
if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
if (!is_callable('smarty_modifier_money')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.money.php';
if (!is_callable('smarty_block_m')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.m.php';
if (!is_callable('smarty_modifier_date_format')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_block_mybox')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.mybox.php';
if (!is_callable('smarty_modifier_date')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.date.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<HEAD>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/init.js"><?php echo '</script'; ?>
>
<?php echo smarty_function_func(array('name'=>'TplData','var'=>'tpldata'),$_smarty_tpl);?>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<TITLE><?php echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;?>
</TITLE>
<?php echo smarty_function_js_include(array('src'=>'/css/style.css'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/corp/style_c.css'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/css/tpl_page_template.css'),$_smarty_tpl);?>


<style>
<?php if (!permitted('ADMIN-RIGHTS')) {?>
  .AdminOnlyVisibility {display:none}
<?php }?>

</style>

<style>



</style>






<?php echo smarty_function_js_include(array('src'=>'/js/functions.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/main.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/jquery-1.9.1.min.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/jquery-ui-1.11.2/jquery-ui.css'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/jquery-ui-1.11.2/jquery-ui.min.js'),$_smarty_tpl);?>


<?php echo smarty_function_js_include(array('src'=>'/js/bubble.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/nav.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/mybox.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ('startup.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<?php echo '<script'; ?>
 language="javascript">
function openViewMerchantApp(){
if(confirm('This Customer App Link is for Customers use only.  If you are a user, and want to submit an Online Customer App to the corporate office, please go to the "Submit Online App" link'))
 	window.open('/merchant.php?agent_id=<?php echo $_smarty_tpl->tpl_vars['LoginInfo']->value['uid'];?>
');
}
<?php echo '</script'; ?>
>
<?php echo smarty_function_js_include(array('src'=>'/corp/favicon.ico'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ('BodyOnLoad.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php echo '<script'; ?>
>
$(document).ready(function(){

	mybox_sortableNavInit();

	var flagSearch=false;
	$('#mainSearch')
		.val('search dba or legal business name...')
		.focus(function(){
			if(flagSearch==false){
				flagSearch=true;
				this.value='';
			}
		});
	$('#mainSearchBtn').click(function(){
		if(flagSearch){
			return true;
		}else{
			return false;
		}
	});
	
});
<?php echo '</script'; ?>
>


</HEAD>
<BODY TOPMARGIN=0 LEFTMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>






<div id="page_template">    
<table id="xmostOuterTable" cellpadding="0" cellspacing="0" border="0" width="100%" >
  
<tr>
  <td>
<DIV class="header2">

			

		  <div class="search-bar">
            <form method="get" action="/mainsearch.php">
		    <input type="text" class="search-field" value="" id="mainSearch" name="q" />
	    	<button type="submit" class="search-button" id="mainSearchBtn"><span class="button-content"></span></button>
			</form>
		  </div>


		<div class="toleft">
			<a href="/home.php">Welcome <strong><?php echo $_smarty_tpl->tpl_vars['LoginInfo']->value['FullName'];?>
</strong></a> 
	  		<?php if (permitted('USERS-MyAccount')) {?>
            	| <a href="/user.php?cmd=edit_user&uid=<?php echo $_smarty_tpl->tpl_vars['LoginInfo']->value['uid'];?>
">My Account</a>
            <?php }?> 
	  		| <a href="/logout.php">Log Out</a>
        </div>
		<div class="toright">
		  
		  <a href="/support/?tab=manual">Help</a>


		  <?php if (permitted('TOPMENU-Support')) {?>	
		  	| <a href="/support.php">Support</a>
		  <?php }?>	
	  
		  <?php if (permitted('SUPPORT-About')) {?>
		  	| <a href="javascript:;" onclick="showPopUp('/site_config.php?cmd=show&code=aboutus',700,700)">About</a>
		  <?php }?>
	  
		  <?php if (permitted('SUPPORT-Contact')) {?>
		    | <a href="javascript:;" onclick="showPopUp('/site_config.php?cmd=show&code=contactus',700,700)">Contact</a>
		  <?php }?>	 	



		  <?php if (permitted('confShowLogo')) {?>
			|
		  	<a href="/home.php?cmd=hidelogo">Hide Logo</a>
		  <?php } else { ?>
          	|
		  	<a href="/home.php?cmd=showlogo">View Logo</a>
		  <?php }?>	


        </div>
    
</DIV>

</td>
</tr>  
  
  
<tr>
	<td>
    
<div class="divOuterTable">
    <TABLE  BORDER=0  CELLSPACING="0" CELLPADDING="0" width="100%">
      
      <?php if (permitted('confShowLogo')) {?><tr>
        <td >
        <div align="center">
        <a href="/home.php"><img class="block" style="max-width:840px;max-height:113px" src="/corp/<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['logo_fname'];?>
" border="0"></a>
        </div>
        </td>

        </tr>		
      <?php }?>	
      
      <TR >
        <TD>
          <DIV id="tabcontainer">
            <?php echo $_smarty_tpl->getSubTemplate ('menu_bar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </DIV>
          </TD>
      </TR>
      
      <TR >
        <TD>
          <DIV id="toplinkscontainer">
				<?php $_smarty_tpl->tpl_vars['s'] = new Smarty_variable('', null, 0);?>

                <?php if (permitted('ONLINEAPPS-AgentApp')) {?>
					<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onClick="window.location.href='/app_manager.php?cmd=add_app&app_id=NEW'">Add Account</a>
                <?php }?>	

                <?php if (permitted('ONLINEAPPS-AddLead')) {?>
					<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onClick="window.location.href='/leads.php?cmd=add_lead'">Add Lead</a>
                <?php }?>	
    
                <?php if (permitted('ONLINEAPPS-SubmitNewRef')) {?>
					<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onClick="window.open('/referral_merch.php?agent_id=<?php echo $_smarty_tpl->tpl_vars['LoginInfo']->value['uid'];?>
')">Add Referral</a>
                <?php }?>	


                <?php if (permitted('ONLINEAPPS-ShopCart')) {?>
					<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onClick="window.open('/shoppingcart/')">Shop Cart</a>
                <?php }?>	


                <?php if (permitted('ONLINEAPPS-PerfChart')) {?>
					<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onClick="window.open('/piechart/')">Perf Charts</a>
                <?php }?>	
    
                <?php if (permitted('ONLINEAPPS-EmailInbox')) {?>
					<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onClick="window.open('/mailbox.php?cmd=inbox&mailboxfolder=inbox')">Email (<?php echo $_smarty_tpl->tpl_vars['tpldata']->value['cntMails'];?>
)</a>
                <?php }?>	

                <?php if (permitted('ONLINEAPPS-Calendar')) {?>
					<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onClick="window.open('/calendar.php?cmd=month')">Calendar</a>
                <?php }?>	


                <?php if (permitted('ONLINEAPPS-Search')) {?>
					<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onClick="window.location.href='/search.php'">Search Acct & Leads</a>
                <?php }?>	
    
                <?php if (permitted('ONLINEAPPS-MerchantApp')) {?>
					<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onClick="openViewMerchantApp()">Web Apps</a>
                <?php }?>	
    
                <?php if (permitted('ONLINEAPPS-Tickets')) {?>
					<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onclick="window.location.href='/tickets.php?cmd=list'">Tickets (<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['tpldata']->value['openTickets'],0);?>
)</a>
                <?php }?>	
                
                <?php if (permitted('ONLINEAPPS-News')) {?>
    				<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onclick="window.location.href='/news.php?cmd=view_news'">Unread News (<?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['tpldata']->value['unreadNews'],0);?>
)</a>
                <?php }?>	
                
                <?php if (permitted('ONLINEAPPS-Projects')) {?>
    				<?php echo $_smarty_tpl->tpl_vars['s']->value;
$_smarty_tpl->tpl_vars['s'] = new Smarty_variable('-', null, 0);?>
	                <a href="javascript:;" onclick="window.location.href='/projectboard'">Projects</a>
                <?php }?>	


			
          </DIV>
          </TD>
      </TR>
      
      <?php if (permitted('confShowLoginInfo')) {?>
      <TR >
        <TD  ><TABLE class="BlueBar" WIDTH="100%" >
          <TR> 
            <TD  ><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['SYS_DESC'];?>
<BR>
              <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['SYS_ISO'];?>
<BR>
              <?php $_smarty_tpl->smarty->_tag_stack[] = array('m', array()); $_block_repeat=true; echo smarty_block_m(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Support<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_m(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['SYS_SUPPORT'];?>
</TD>
            <TD  valign="top"> <P title="Login time: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['LoginInfo']->value['login_time'],'%x %X');?>
" STYLE="text-align: right;">
              <?php $_smarty_tpl->smarty->_tag_stack[] = array('m', array()); $_block_repeat=true; echo smarty_block_m(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Logged
              in as User ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_m(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 "<?php echo $_smarty_tpl->tpl_vars['LoginInfo']->value['UserName'];?>
" <?php echo $_smarty_tpl->tpl_vars['LoginInfo']->value['UserType'];?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['LoginInfo']->value['BusinessName'];?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['LoginInfo']->value['FullName'];?>
                 <BR>
              </P></TD>
            </TR>
          </TABLE></TD>
        </TR>
      <?php }?>		  
      <TR >
        <TD>
		  <div align="center">		
          <?php if ($_smarty_tpl->tpl_vars['contentsWide']->value) {?>
          	<div style="padding-top:12px;">
            <?php echo $_smarty_tpl->tpl_vars['contentsWide']->value;?>

            </div>
          <?php } else { ?>
              
              <table class="page_2colTbl" cellspacing="0" border="0">
              	
                <!--col class="pagecol_col1a" />
              	<col class="pagecol_col1" />
              	<col class="pagecol_col2" />
              	<col class="pagecol_col3" />
              	<col class="pagecol_col3a" /-->
                <tr>
                  <td class="page_col1a mySortable navCol" data-navcol="1"></td>
                  <td class="page_col1  mySortable navCol" data-navcol="2"> 
                      
                      <?php if ($_smarty_tpl->tpl_vars['my']->value->lead_alert->isAllowed) {?>
					  	<?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"LeftPanel_alertsdue",'title'=>"Today's Appts/Tasks",'class'=>"box-one box-gray")); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"LeftPanel_alertsdue",'title'=>"Today's Appts/Tasks",'class'=>"box-one box-gray"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                      	<a href="javascript:;" onClick="showPopUp('leads.php?cmd=alert_popup',700,500);">
                        <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td style='padding:4px'><img class="block" src="../assets/images/icon_warning.png" width="48" height="48" border="0"></td>
                          <td align="center" valign="middle"><span style='font-size:9pt'>Tasks/Appointments <br>
                            Are Due Today</span></td>
                          </tr>
                        </table>
                        </a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"LeftPanel_alertsdue",'title'=>"Today's Appts/Tasks",'class'=>"box-one box-gray"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                      <?php }?>
                      
                      <?php if ($_smarty_tpl->tpl_vars['my']->value->lead_alert->startPopup) {?>
                      	<?php echo '<script'; ?>
 type="text/javascript">showPopUp('leads.php?cmd=alert_popup',700,500);<?php echo '</script'; ?>
>
                      <?php }?>
                      
                      <?php echo smarty_function_func(array('name'=>'PageLinks','col'=>1),$_smarty_tpl);?>

                      
                      
                     
                      
                      
                      <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['SYS_SSLLINK']) {?>
                      <div style='text-align:center;padding-top:8px;'>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['SYS_SSLLINK'];?>
" target="_blank"><img src="/corp/ssl_image.gif" border="0"></a>			</div>
                      <?php }?>			
                      
                      <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['sslCertificateLinkCode']) {?>
                      <div>
                      <iframe scrolling="no" style='text-align:center;padding:4px;width:100%;height:50px;' frameborder="0" src="/linkcodes.php?cmd=sslCertificateLinkCode"
                      OnLoad="var h=this.contentWindow.document.body.scrollHeight+0;this.style.height=h+'px'">
                      </iframe>
                      </div>
                      <?php }?>
                      
                      
                      <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['sslPciCertificateLinkCode']) {?>
                      	<div>
                        <iframe scrolling="no" style='text-align:center;padding:4px;width:100%;height:50px;' frameborder="0" src="/linkcodes.php?cmd=sslPciCertificateLinkCode"
                      OnLoad="var h=this.contentWindow.document.body.scrollHeight+0;this.style.height=h+'px'">
                      </iframe>			
                        </div>
                      <?php }?>
                                    
					<?php echo '<script'; ?>
>
						
						//mybox_sortableInit('.mySortable.c1');
						//mybox_sortableInit('.mySortable.LeftPanel.c2');
						
						<?php echo '</script'; ?>
>
                  </td>
                  <td class="page_col2">
                  
                    <?php echo $_smarty_tpl->tpl_vars['contents']->value;?>

                  
                  </td>
                  
                  <td class="page_col3   mySortable navCol" data-navcol="3">
                  
                      <?php if (permitted('RIGHTCOLBOX-datetime')) {?>
                      	<?php echo $_smarty_tpl->getSubTemplate ("box_datetime.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                      <?php }?>

                      



                      <?php if (permitted('confShowBackup')&&permitted('SUPERADMIN-RIGHTS')) {?>
                          <?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('node'=>"col3_backup",'title'=>"CRM Backup",'class'=>"box-one box-gray")); $_block_repeat=true; echo smarty_block_mybox(array('node'=>"col3_backup",'title'=>"CRM Backup",'class'=>"box-one box-gray"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                          	<?php echo smarty_function_func(array('name'=>'BackupBoxData','var'=>'BackupBoxData'),$_smarty_tpl);?>
		
                           
                              <?php if ($_smarty_tpl->tpl_vars['BackupBoxData']->value['showAlert']) {?>
                                  <?php echo smarty_function_js_include(array('src'=>'/js/flash_text.js'),$_smarty_tpl);?>

                                  <div id="flashTable1" ><div style='width:100%;border:none' align="center"
                                  class="RedFlashText" onClick="window.location.href='/update_corp.php?cmd=backup'" title="Database backed up <?php echo $_smarty_tpl->tpl_vars['BackupBoxData']->value['age'];?>
 days ago">
                                  <span class='nobr'>DB Backup Past Due</span></div></div >
                              <?php }?>

                          	<table class="leftNavTable">
                              <tr class="menuitemsub_k">
                              <td>
                               &nbsp;Last Backup: <div class="toright"><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['BackupBoxData']->value['date']);?>
</div>
                          	</td>
                              </tr>
                              <tr class="menuitemsub_k">
                              <td>
                               &nbsp;Version: <div class="toright"><?php echo $_smarty_tpl->tpl_vars['BackupBoxData']->value['db_version'];?>
</div>
                              </td>
                              </tr>
                              <tr class="menuitemsub_k">
                              <td>
                               &nbsp;Perform Backup <div class="toright"><a href="/update_corp.php?cmd=backup">Start</a></div>
                              </td>
                              </tr>
                             	</table>
                          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('node'=>"col3_backup",'title'=>"CRM Backup",'class'=>"box-one box-gray"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                      <?php }?>

                      <?php echo smarty_function_func(array('name'=>'PageLinks','col'=>3),$_smarty_tpl);?>

                  

                  </td>
                  <td class="page_col3a  mySortable navCol" data-navcol="4"></td>
    
                  
                  </tr>
                </table>
              
		   <?php }?>	              
          </div>
          </TD>
      </TR>
      <TR> 
        
        <TD valign="top" style='width:671px;'></TD>
      </TR>
      </TABLE>    


</div>	
</td>
</tr>
<tr>
  <td><DIV class="footer3">
                  <div><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['CopyrightText'];?>
</div>
                  <div><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['PoweredBy'];?>
</div>
</DIV>

<DIV class="footer4">
				  <?php echo $_smarty_tpl->getSubTemplate ('footerLinksDiv.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</DIV>

</td>
</tr>
</table>





</div>


<?php echo smarty_function_func(array('name'=>'IMCode'),$_smarty_tpl);?>



</BODY>
</HTML><?php }} ?>
