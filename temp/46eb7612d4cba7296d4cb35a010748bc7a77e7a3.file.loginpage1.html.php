<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:23:49
         compiled from "/homepages/37/d619410358/htdocs/developer/template/loginpage1.html" */ ?>
<?php /*%%SmartyHeaderCode:11407357575778af759dd836-13654729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46eb7612d4cba7296d4cb35a010748bc7a77e7a3' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/loginpage1.html',
      1 => 1466056145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11407357575778af759dd836-13654729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGETITLE' => 0,
    'CONFIG' => 0,
    'username' => 0,
    'loginoptHideTOS' => 0,
    'loginoptHidePwdreset' => 0,
    'CurrentIP' => 0,
    'disableLogin' => 0,
    'LoginPageText' => 0,
    'speakpipeCode' => 0,
    'olarkCode' => 0,
    'phpliveCode' => 0,
    'custom_body_end_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af75b80ee4_55191464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af75b80ee4_55191464')) {function content_5778af75b80ee4_55191464($_smarty_tpl) {?><?php if (!is_callable('smarty_function_js_include')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/function.js_include.php';
if (!is_callable('smarty_block_m')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.m.php';
if (!is_callable('smarty_block_mybox')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/block.mybox.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML>
<HEAD>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/init.js"><?php echo '</script'; ?>
>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<TITLE><?php echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;?>
</TITLE>
<?php echo smarty_function_js_include(array('src'=>'/css/style.css'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/corp/style_c.css'),$_smarty_tpl);?>


<?php echo smarty_function_js_include(array('src'=>'/js/functions.js'),$_smarty_tpl);?>

<?php echo smarty_function_js_include(array('src'=>'/js/jquery-1.9.1.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ('startup.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php echo smarty_function_js_include(array('src'=>'/corp/favicon.ico'),$_smarty_tpl);?>


<style>
#LoginButton a:hover img{
	filter: alpha(opacity:70);opacity: 0.7;moz-opacity : 0.7; khtml-opacity : 0.7;
}
#UserName, #Password, #TOS, #LoginButton, #PasswordReset{
	margin-bottom:10px;
}

#LoginButton img{width:127px;height:25px;}

input#loginid, input#password{
	font-size:12pt;
	width:123px;
}

#IPAddress{border-top:solid #999999 1px;padding-top:5px}

</style>
<?php echo '<script'; ?>
 language="javascript">
function loginClick(){
	if(el('cbAgree') && !el('cbAgree').checked){
		alert('You must agree to TOS first');
		return false;
	}
	document.loginForm.submit();
}
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ('BodyOnLoad.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</HEAD>
<BODY TOPMARGIN=0 LEFTMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>

<div id="mostOuterDiv">

<table id="mostOuterTable" cellpadding="0" cellspacing="0" border="0">
  
<tr>
  <td>
<DIV class="header2">
<table class="topLinksBar" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td align="left"> CRM Merchant Management Software<a href="/logout.php"></a></td>
	<td align="right">     Leads. Sales. Profits. Success.	 	</td>
	</tr></table>
</DIV>


</td>
</tr>  
  
  
<tr>
	<td>
<div class="divOuterTable">
<TABLE  BORDER=0 CELLSPACING=0 CELLPADDING=0  width="100%">
<?php if (permitted('confShowLogo')) {?>
  <TR valign="top" ALIGN=LEFT>
    <TD style='padding:0px' >
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><div align="center"><a href="/home.php"><img class="block" style='' src="/corp/<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['logo_fname'];?>
" border=0 id="Picture46"></a></div></td>
          </tr>
      </table>
    </TD>
  </TR>
<?php }?>  
  
  
  
  
  <TR valign="top" ALIGN=LEFT>
    <TD >          
    <DIV id="toplinkscontainer">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('m', array()); $_block_repeat=true; echo smarty_block_m(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Welcome to<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_m(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['SYS_DESC'];?>
 
	</DIV>
</TD>
  </TR>
  
  
  <TR valign="top" ALIGN=LEFT> 
    <TD >
      <div align="center">	
    <TABLE class="page_2colTbl" cellspacing="0">
                <col class="pagecol_col1" />
              	<col class="pagecol_col2" />
              	<col class="pagecol_col3" />

        <TR> 
          <TD class="page_col1"> 
          	
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('title'=>"User Login",'node'=>'','class'=>"box-gray")); $_block_repeat=true; echo smarty_block_mybox(array('title'=>"User Login",'node'=>'','class'=>"box-gray"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          
            <TABLE WIDTH="100%" BORDER=0 CELLSPACING=0 CELLPADDING=0 NOF=TE>
              <TR> 
                <TD ALIGN="CENTER"> 
                  <TABLE ID="Table6" BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH="100%">
                    <FORM NAME="loginForm" action="/login.php" METHOD=POST>
                      <COLGROUP>
                        <COL WIDTH="100%">
                        </COLGROUP>
                      <TR> 
                        <TD WIDTH="100%" align="center" STYLE="padding: 5px;"> 
                          <div id="UserName">
                            <div class="fldTitle">User Name</div>
                            <input id="loginid" type="text" name="loginid" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" size=16 maxlength=50>
                            </div>
                          
                          <div id="Password">
                            <div class="fldTitle">Password</div>						  
                            <input id="password" type="password" name="password" autocomplete="on" value="" size=16 
                            onkeyup="if(event.keyCode==13) this.form.submit()"
                            > 
                            </div>	
                          
                          <?php if (!$_smarty_tpl->tpl_vars['loginoptHideTOS']->value) {?>
                          <div id="TOS">
                            <span class="alike"><input type="checkbox" name="cbAgree" id="cbAgree" onClick="el('fLogin').disabled=!this.checked"></span>
                            <a href="javascript:void(0);" onClick="myFooterPopup('footerTerms');return false;">Agree to TOS</a>
                            </div>
                          <?php }?>					
                          
                          <div id="LoginButton">
                          
                          
                          <input type="button" value="Login" onclick="loginClick()" />
                          <div>
                          
                          <?php if (!$_smarty_tpl->tpl_vars['loginoptHidePwdreset']->value) {?>
                          <div id="PasswordReset">
                            <a href="#" onClick="document.getElementById('pwdreminderTbl').style.display='';return false"><?php $_smarty_tpl->smarty->_tag_stack[] = array('m', array()); $_block_repeat=true; echo smarty_block_m(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Forgot  Password?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_m(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                            </div>
                          <?php }?>                        
                          
                          </TD>
                        </TR>
                      </FORM>
                    </TABLE>
                  </TD>
                </TR>
              </TABLE>
            
            <TABLE ID="pwdreminderTbl" style='display:none' BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH="100%">
              <FORM NAME="LAYOUTFORM" action="/login.php" METHOD=POST>
                <COLGROUP>
                  <COL WIDTH="100%">
                  </COLGROUP>
                <TR>
                  <TD WIDTH="100%" STYLE="padding: 5px;">
                    <P STYLE="text-align: center;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('m', array()); $_block_repeat=true; echo smarty_block_m(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Username or Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_m(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</P>
                    </TD>
                  </TR>
                <TR>
                  <TD WIDTH="100%" align="center" STYLE="padding: 5px;">
                    <SPAN class="xx-small">
                      <input id="loginid" type="text" name="RecoverString" value="" size=16 maxlength=50>
                      </SPAN>                  </TD>
                  </TR>
                
                <TR>
                  <TD WIDTH="100%" HEIGHT=34 align="center" valign="middle" STYLE="padding: 5px;">
                    <input type="submit" name="RequestPwdButton" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('m', array()); $_block_repeat=true; echo smarty_block_m(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Request<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_m(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" >
                    </TD>
                  </TR>
                </FORM>
              </TABLE>
            
            <div id="IPAddress" align="center"><span class="alike"><?php $_smarty_tpl->smarty->_tag_stack[] = array('m', array()); $_block_repeat=true; echo smarty_block_m(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your IP Address is:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_m(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br><?php echo $_smarty_tpl->tpl_vars['CurrentIP']->value;?>
</span><br />
              <br />
              </div>
            
            
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('title'=>"User Login",'node'=>'','class'=>"box-gray"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            
            
            <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['SYS_SSLLINK']) {?>
            <div style='text-align:center;padding-top:8px;'>
              <a href="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['SYS_SSLLINK'];?>
" target="_blank"><img src="/corp/ssl_image.gif" border="0"></a>
              </div>
            <?php }?>			
            
            <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['sslCertificateLinkCode']) {?>
            <div style='text-align:center;padding-top:8px;'>
              <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['sslCertificateLinkCode'];?>

              </div>
            <?php }?>
            
            
            <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['sslPciCertificateLinkCode']) {?>
            <div style='text-align:center;padding-top:8px;'>
              <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['sslPciCertificateLinkCode'];?>

              </div>
            <?php }?>
            
            
            </TD>
            
            
            
          <TD class="page_col2" > 
            
           	
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('mybox', array('title'=>"Welcome",'node'=>'','class'=>"box-gray")); $_block_repeat=true; echo smarty_block_mybox(array('title'=>"Welcome",'node'=>'','class'=>"box-gray"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div style="padding:8px;font-family: Verdana; font-size: 10pt;">
                    
                    <?php if ($_smarty_tpl->tpl_vars['disableLogin']->value) {?>
                    	<div style='color:red;border:red dashed 1px;padding:4px'>
                    		Our CRM system is down for maintenance and will be available soon.  We are sorry for the inconvenience.  Please contact us if you have any questions.
                        </div>
                    <?php } else { ?>
                    <SPAN ><?php echo $_smarty_tpl->tpl_vars['LoginPageText']->value;?>
</SPAN>
                    <?php }?>
                    
                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_mybox(array('title'=>"Welcome",'node'=>'','class'=>"box-gray"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            
            </TD>
            
            <td class="page_col3">
            	<?php echo $_smarty_tpl->getSubTemplate ("box_datetime.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </td>
          </TR>
        </TABLE>
        </div>
    </TD>
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
<?php echo $_smarty_tpl->tpl_vars['speakpipeCode']->value;?>

<?php echo $_smarty_tpl->tpl_vars['olarkCode']->value;?>

<?php echo $_smarty_tpl->tpl_vars['phpliveCode']->value;?>

<?php echo $_smarty_tpl->tpl_vars['custom_body_end_html']->value;?>

</BODY>
</HTML><?php }} ?>
