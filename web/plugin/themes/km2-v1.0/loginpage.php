<html>
<head>
<title><?=$web_title?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!--link rel="stylesheet" type="text/css" href="<?=$http_path['themes']?>/<?=$themes_module?>/jscss/test/common.css"-->
<link rel="stylesheet" type="text/css" href="<?=$http_path['themes']?>/<?=$themes_module?>/jscss/style.css">

</head>
<body>
<div id="wraplogin">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
    <td align="center" valign="center" bgcolor="#666666">
    <TABLE width=960px height=125px BORDER=0 CELLPADDING=0 CELLSPACING=0>
    <TR>
        <!--td background="<?=$http_path['themes']?>/<?=$themes_module?>/images/header-4.png"-->
        <td class='header' >
            <br />
            <table border="0" cellpadding="2" cellspacing="2">
	      <tr>
               <td colspan=2><?=$error_content?></td>
              </tr>
            <form action=menu.php method=POST>
              <input type=hidden name=inc value=login>
              <tr>
                <td width="90" align="right"><font color="white">Username &nbsp; </td>
                <td>&nbsp;<input type=text name=username maxlength=100 size=20></td>
    	      </tr>
              <tr>
               <td align="right"><font color="white">Password &nbsp; </font></td>
               <td>&nbsp;<input type=password name=password maxlength=100 size=20></td>
	      </tr>
	      <tr>
		<td>&nbsp;</td>
		<td>&nbsp;<input type=submit class=button value=Login></td>
	      </tr>
	    </form>          
	    </table>
	   <br />
	</TD>
    </TR>
</TABLE>
</td>
</TR>
</TABLE>
