<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-03 02:24:18
         compiled from "/homepages/37/d619410358/htdocs/developer/template/total_daily_rep.html" */ ?>
<?php /*%%SmartyHeaderCode:9897794355778af92208096-49906685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e0d95b0f8cc776c0558f7f344a6bb789afd6fc2' => 
    array (
      0 => '/homepages/37/d619410358/htdocs/developer/template/total_daily_rep.html',
      1 => 1466056145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9897794355778af92208096-49906685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'totalUsers' => 0,
    'cntAllLeads' => 0,
    'cntAllReferrals' => 0,
    'totalRecruits' => 0,
    'cntAppointments' => 0,
    'cntTasks' => 0,
    'cntAppsReceived' => 0,
    'cntAppsApproved' => 0,
    'cntAppsPayrollApproved' => 0,
    'cntAppsPayrollPaid' => 0,
    'totalTickets' => 0,
    'cntDocs' => 0,
    'cntKb' => 0,
    'cntWorkingLeads' => 0,
    'cntLeadAppointments' => 0,
    'cntLeadReminders' => 0,
    'cntAppsWelcomeCalls' => 0,
    'cntAppsInstalls' => 0,
    'cntAppsReprograms' => 0,
    'totalUserLogins' => 0,
    'totalUsersD' => 0,
    'cntAllLeadsD' => 0,
    'cntAllReferralsD' => 0,
    'totalRecruitsD' => 0,
    'cntAppointmentsD' => 0,
    'cntLeadRemindersD' => 0,
    'cntAppsReceivedD' => 0,
    'cntAppsApprovedD' => 0,
    'cntAppsPayrollApprovedD' => 0,
    'cntAppsPayrollPaidD' => 0,
    'totalTicketsD' => 0,
    'cntDocsD' => 0,
    'cntKbD' => 0,
    'cntWorkingLeadsD' => 0,
    'cntLeadAppointmentsD' => 0,
    'cntAppsWelcomeCallsD' => 0,
    'cntAppsInstallsD' => 0,
    'cntAppsReprogramsD' => 0,
    'totalUserLoginsD' => 0,
    'activeUsersD' => 0,
    'item' => 0,
    'merchantsD' => 0,
    'referralsD' => 0,
    'recruitsD' => 0,
    'statList' => 0,
    'profitStatlist' => 0,
    'profitAgents' => 0,
    'profitAgentsTotal' => 0,
    'leadsByOwner' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5778af92337585_31670190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5778af92337585_31670190')) {function content_5778af92337585_31670190($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_money')) include '/homepages/37/d619410358/htdocs/developer/ext/smarty3/plugins/modifier.money.php';
?>
<style type="text/css">
body, div, span, td, p{
	font-size: 10pt;
	font-family: Arial;
}

TABLE.tbl1 {border-collapse:collapse;}
TABLE.tbl1 TD {border:solid #DDDDDD 1px}
</style>
<style><!--
/* Font Definitions */
/* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	margin-bottom:.0001pt;
	}
a:link, span.MsoHyperlink
	{mso-style-priority:99;
	color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-priority:99;
	color:purple;
	text-decoration:underline;}
p
	{mso-style-priority:99;
	margin:0in;
	margin-bottom:.0001pt;
	}
span.EmailStyle18
	{mso-style-type:personal;
	color:windowtext;}
span.z-TopofFormChar
	{mso-style-name:"z-Top of Form Char";
	mso-style-priority:99;
	mso-style-link:"z-Top of Form";

	display:none;}
span.z-BottomofFormChar
	{mso-style-name:"z-Bottom of Form Char";
	mso-style-priority:99;
	mso-style-link:"z-Bottom of Form";
	
	display:none;}
span.EmailStyle23
	{mso-style-type:personal;
	
	color:#1F497D;}
span.x-small1
	{mso-style-name:x-small1;
	}
span.EmailStyle25
	{mso-style-type:personal-reply;
	
	color:#1F497D;}
.MsoChpDefault
	{mso-style-type:export-only;
	}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;}
div.WordSection1
	{page:WordSection1;}

DIV.fldTitle  {
	
		
	white-space:normal;	
	vertical-align:top;
	color:#3366cc}

--></style><!--[if gte mso 9]><xml>
<o:shapedefaults v:ext="edit" spidmax="1026" />
</xml><![endif]--><!--[if gte mso 9]><xml>
<o:shapelayout v:ext="edit">
<o:idmap v:ext="edit" data="1" />
</o:shapelayout></xml><![endif]-->

<div class=WordSection1>
  <table  width="100%" border="0" cellspacing="0" cellpadding="8" class="tbl1">
    <tr>
      <td colspan="3" valign="top" style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><span class="MsoNormal" style="margin-bottom:12.0pt"><b><span style='color:#1F497D'>ALL-TIME STATS:&nbsp; Total Activity Report for All-Time/All Users</span></b><span style='color:#1F497D'>
      <o:p></o:p>
      </span></span></td>
    </tr>
    <tr>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'>Total # Users: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['totalUsers']->value,0);?>
 <br>
Total # Leads: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAllLeads']->value,0);?>
 <br>
Total # Referrals: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAllReferrals']->value,0);?>
<br>
<span class="MsoNormal" style="margin-bottom:12.0pt">Total New Job Applicants: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['totalRecruits']->value,0);?>
<br>
<span class="MsoNormal" style="margin-bottom:12.0pt">Total Appointments: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppointments']->value,0);?>
 <br>
</span><span class="MsoNormal" style="margin-bottom:12.0pt">Total Tasks/Reminders: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntTasks']->value,0);?>
 </span><br>
</span><br>
      </span></span></td>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'> Total # Apps &#8211; Received: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsReceived']->value,0);?>
<br>
Total # Apps &#8211; Approved: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsApproved']->value,0);?>
<br>
      Total # Apps &#8211; Payroll Approved: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsPayrollApproved']->value,0);?>
<br>
Total # Apps &#8211; Payroll Paid : <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsPayrollPaid']->value,0);?>
</span></span></td>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'>Total Trouble Tickets: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['totalTickets']->value,0);?>
 <br>
Total Documents: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntDocs']->value,0);?>
<br>
Total KB Articles: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntKb']->value,0);?>
 <br>
      Total News Articles: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntKb']->value,0);?>
 </span></span></td>
    </tr>
    <tr>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><span class="MsoNormal" style="margin-bottom:12.0pt">Total Users Working Leads: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntWorkingLeads']->value,0);?>
</span><br>
 Total LEAD Appointments: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntLeadAppointments']->value,0);?>
 <br>
Total LEAD Tasks/Reminders: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntLeadReminders']->value,0);?>
 </span></span></td>
      <td valign="top"><span class="style3"><span style="color:#1F497D">Total # Apps &#8211; Welcome Calls: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsWelcomeCalls']->value,0);?>
<br>
Total # Apps &#8211; Total Installs: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsInstalls']->value,0);?>
<br>
Total # Apps &#8211; Total Reprograms  : <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsReprograms']->value,0);?>
</span></span></td>
      <td valign="top"><span class="style3"><span style="color:#1F497D">Total User Logins: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['totalUserLogins']->value,0);?>
 </span></span></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'>
            <b>DAILY</b></span><b><span style='color:#1F497D'> STATS:&nbsp; End-of-Day CRM Activity Reports (All Users)</span></b><span style='color:#1F497D'>
            <o:p></o:p>
            </span></span></td>
    </tr>
    <tr>
      <td valign="top"><p><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'>Daily # Users: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['totalUsersD']->value,0);?>
 <br>
        Daily # Leads: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAllLeadsD']->value,0);?>
 <br>
        Daily # Referrals: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAllReferralsD']->value,0);?>
 <br>
        </span></span><span style="color:#1F497D">Daily New Job Applicants: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['totalRecruitsD']->value,0);?>
 </span><br>
        <span style="color:#1F497D">Daily Appointments: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppointmentsD']->value,0);?>
 <br>
Daily Tasks/Reminders: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntLeadRemindersD']->value,0);?>
 <br>
        </span></p>
      </td>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'>Daily # Apps &#8211; Received: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsReceivedD']->value,0);?>
<br>
Daily # Apps &#8211; Approved: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsApprovedD']->value,0);?>
<br>
      Daily # Apps &#8211; Payroll Approved: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsPayrollApprovedD']->value,0);?>
<br>
Daily # Apps &#8211; Payroll Paid : <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsPayrollPaidD']->value,0);?>
</span></span></td>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'>Daily Trouble Tickets: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['totalTicketsD']->value,0);?>
<br>
Daily Documents: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntDocsD']->value,0);?>
<br>
Daily Knowledgebase Articles: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntKbD']->value,0);?>
 </span></span></td>
    </tr>
    <tr>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><span class="MsoNormal" style="margin-bottom:12.0pt">Daily Users Working Leads: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntWorkingLeadsD']->value,0);?>
<br>
      </span>
Daily LEAD Appointments: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntLeadAppointmentsD']->value,0);?>
 <br>
Daily LEAD Tasks/Reminders: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntLeadRemindersD']->value,0);?>
 </span></span></td>
      <td valign="top"><span style="color:#1F497D">Daily # Apps &#8211; Welcome Calls : <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsWelcomeCallsD']->value,0);?>
<br>
Daily # Apps &#8211; Total Installs: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsInstallsD']->value,0);?>
<br>
Daily # Apps &#8211; Total Reprograms  : <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['cntAppsReprogramsD']->value,0);?>
</span></td>
      <td valign="top"><span style="color:#1F497D">Daily User Logins: <?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['totalUserLoginsD']->value,0);?>
 </span></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><b>TODAY&#8217;S ACTIVITY:&nbsp; New Merchant Applications Submitted by User Name:</b></span></span></td>
    </tr>
    <tr>
      <td colspan="3" valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'> <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activeUsersD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <?php echo $_smarty_tpl->tpl_vars['item']->value['UserName'];?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
<br>
<?php } ?> </span></span></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><b>TODAY'S ACTIVITY:  New Merchant Customers Boarded:  </b></span></span></td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['merchantsD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><?php echo $_smarty_tpl->tpl_vars['item']->value['BusinessName'];?>
</span></span></td>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><?php echo $_smarty_tpl->tpl_vars['item']->value['BusinessAddress'];?>
</span></span></td>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><?php echo $_smarty_tpl->tpl_vars['item']->value['BusinessCity'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['BusinessState'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['BusinessZip'];?>
</span></span></td>
    </tr>
<?php } ?>	


    <tr>
      <td colspan="3" valign="top" style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><b>TODAY'S ACTIVITY:  New Referrals Received:  </b></span></span></td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['referralsD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><?php echo $_smarty_tpl->tpl_vars['item']->value['BusinessName'];?>
</span></span></td>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><?php echo $_smarty_tpl->tpl_vars['item']->value['BusinessAddress'];?>
</span></span></td>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><?php echo $_smarty_tpl->tpl_vars['item']->value['BusinessCity'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['BusinessState'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['BusinessZip'];?>
</span></span></td>
    </tr>
<?php } ?>	


    <tr>
      <td colspan="3" valign="top" style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><b>TODAY'S ACTIVITY:  New Job Applicant Inquires:</b></span></span></td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recruitsD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><?php echo $_smarty_tpl->tpl_vars['item']->value['FirstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['LastName'];?>
</span></span></td>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><?php echo $_smarty_tpl->tpl_vars['item']->value['Address'];?>
</span></span></td>
      <td valign="top"><span class="MsoNormal" style="margin-bottom:12.0pt"><span style='color:#1F497D'><?php echo $_smarty_tpl->tpl_vars['item']->value['City'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['State'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['Zip'];?>
</span></span></td>
    </tr>
<?php } ?>	

  </table>
  <p class=MsoNormal style='margin-bottom:12.0pt'><span style='color:#1F497D'><br>
  </span>
    <o:p>&nbsp;</o:p>
  </p>
<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style='width:100.0%'><tr><td style='background:#C2CDE1;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=center style='text-align:center'><b><span style="color:black">New Account Boarding and Application Status System<o:p></o:p></span></b></p></td></tr><tr><td valign="top" style='background:white;padding:3.0pt 3.0pt 3.0pt 6.0pt'></td></tr><tr><td style='padding:0in 0in 0in 0in'><div align=center><table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style='width:100.0%'><tr><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Today</span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>MTD</span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Last Month </span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>YTD</span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Last Year </span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Life Time </span></b><span style=''><o:p></o:p></span></p></td></tr>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<tr><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><span style=''><?php echo $_smarty_tpl->tpl_vars['item']->value['statusTitle'];?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntToday'])===null||$tmp==='' ? 0 : $tmp);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntMTD'])===null||$tmp==='' ? 0 : $tmp);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntLastMonth'])===null||$tmp==='' ? 0 : $tmp);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntYTD'])===null||$tmp==='' ? 0 : $tmp);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntLastYear'])===null||$tmp==='' ? 0 : $tmp);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntALL'])===null||$tmp==='' ? 0 : $tmp);?>
<o:p></o:p></span></p></td></tr>
<?php } ?>
</table>
</div></td></tr></table><p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p><p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p><table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style='width:100.0%'><tr><td style='background:#C2CDE1;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=center style='text-align:center'><b><span style="color:black">TOTAL APPROVED STATS for Bonuses, Commissions, &amp; Lease Funding<o:p></o:p></span></b></p></td></tr><tr><td style='padding:0in 0in 0in 0in'><div align=center><table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style='width:100.0%'><tr><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Today</span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>MTD</span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Last Month </span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>YTD</span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Last Year </span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Life Time </span></b><span style=''><o:p></o:p></span></p></td></tr>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profitStatlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<tr><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><span style=''><?php echo $_smarty_tpl->tpl_vars['item']->value['statusTitle'];?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntToday']);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntMTD']);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntLastMonth']);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntYTD']);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntLastYear']);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['cntALL']);?>
<o:p></o:p></span></p></td></tr>
<?php } ?>
</table>
</div></td></tr></table><p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p><table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style='width:100.0%'><tr><td colspan=6 style='background:#C2CDE1;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style="color:black">DAILY Sales User Commissions<o:p></o:p></span></b></p></td></tr><tr><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style=''>User Name</span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style=''>User Type</span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Invoices</span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Pending</span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Approved</span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>Paid</span></b><span style=''><o:p></o:p></span></p></td></tr>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profitAgents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<tr><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style=''><?php echo $_smarty_tpl->tpl_vars['item']->value['agent_name'];?>
</span></b><span style=''><o:p></o:p></span></p></td><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><span style=''><?php echo $_smarty_tpl->tpl_vars['item']->value['typetitle'];?>
<o:p></o:p></span></p></td><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['cntInv'])===null||$tmp==='' ? '0' : $tmp);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''>$<?php echo (($tmp = @smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['pendingComm']))===null||$tmp==='' ? '0.00' : $tmp);?>
<o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''>$<?php echo (($tmp = @smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['actualComm']))===null||$tmp==='' ? '0.00' : $tmp);?>

  <o:p></o:p></span></p></td><td valign="top" style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''>$<?php echo (($tmp = @smarty_modifier_money($_smarty_tpl->tpl_vars['item']->value['paidComm']))===null||$tmp==='' ? '0.00' : $tmp);?>
<o:p></o:p></span></p></td></tr>
<?php } ?>

<tr><td nowrap valign="top" style='background:#EEEEEE;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style=''>Total</span></b><span style=''><o:p></o:p></span></p></td><td nowrap valign="top" style='background:#EEEEEE;padding:3.0pt 3.0pt 3.0pt 3.0pt'></td><td nowrap valign="top" style='background:#EEEEEE;padding:3.0pt 3.0pt 3.0pt 3.0pt'></td><td nowrap valign="top" style='background:#EEEEEE;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>$<?php echo (($tmp = @smarty_modifier_money($_smarty_tpl->tpl_vars['profitAgentsTotal']->value['pendingComm']))===null||$tmp==='' ? '0.00' : $tmp);?>
<o:p></o:p></span></b></p></td><td nowrap valign="top" style='background:#EEEEEE;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><span style=''>$<?php echo (($tmp = @smarty_modifier_money($_smarty_tpl->tpl_vars['profitAgentsTotal']->value['actualComm']))===null||$tmp==='' ? '0.00' : $tmp);?>
<o:p></o:p></span></p></td><td nowrap valign="top" style='background:#EEEEEE;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal align=right style='text-align:right'><b><span style=''>$<?php echo (($tmp = @smarty_modifier_money($_smarty_tpl->tpl_vars['profitAgentsTotal']->value['paidComm']))===null||$tmp==='' ? '0.00' : $tmp);?>
<o:p></o:p></span></b></p></td></tr></table>
<p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p><p class=MsoNormal><o:p>&nbsp;</o:p></p><table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style='width:100.0%'><tr><td style='background:#C2CDE1;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style="color:black">View System Wide Lead Statistics &#8211; Per User and Per User Categories</span></b><span style=''><o:p></o:p></span></p></td></tr><tr><td style='padding:0in 0in 0in 0in'><table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%" style='width:100.0%'><tr><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style=''>User Name </span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style=''>New </span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style=''>Working </span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style=''>Contact </span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style=''>Hot </span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style=''>Sold </span></b><span style=''><o:p></o:p></span></p></td><td style='background:#DDDDDD;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><b><span style=''>Dead </span></b><span style=''><o:p></o:p></span></p></td></tr>

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leadsByOwner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<tr><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><span style=''><?php echo $_smarty_tpl->tpl_vars['v']->value['NAME'];?>
<o:p></o:p></span></p></td><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><span style=''><?php echo $_smarty_tpl->tpl_vars['v']->value['NEW'];?>
<o:p></o:p></span></p></td><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><span style=''><?php echo $_smarty_tpl->tpl_vars['v']->value['WORKING'];?>
<o:p></o:p></span></p></td><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><span style=''><?php echo $_smarty_tpl->tpl_vars['v']->value['CONTACTED'];?>
<o:p></o:p></span></p></td><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><span style=''><?php echo $_smarty_tpl->tpl_vars['v']->value['QUALIFIED'];?>
<o:p></o:p></span></p></td><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><span style=''><?php echo $_smarty_tpl->tpl_vars['v']->value['SOLD'];?>
<o:p></o:p></span></p></td><td style='border:none;border-bottom:solid #DDDDDD 1.0pt;background:white;padding:3.0pt 3.0pt 3.0pt 3.0pt'><p class=MsoNormal><span style=''><?php echo $_smarty_tpl->tpl_vars['v']->value['DEAD'];?>
<o:p></o:p></span></p></td></tr>
<?php } ?>
</table></td></tr></table><p class=MsoNormal><o:p>&nbsp;</o:p></p><p class=MsoNormal><o:p>&nbsp;</o:p></p><p class=MsoNormal><o:p>&nbsp;</o:p></p></div>

<?php }} ?>
