<?php
extract($_REQUEST);
if(isset($Submit)){
$ans = 
    -20.840108 * 1 + 
    2.097871 * $select + 
    1.488203 * $radiobutton1 + 
    0.163021 * $select2 + 
   18.341656 * $radiobutton2 +
   -0.015103 * ($textfield2 / ($textfield/100)*($textfield/100)) + 
   -3.228649 * $radiobutton3+ 
   -1.013247 * $radiobutton4+ 
    1.535307 * $radiobutton5+
    1.664025 * $radiobutton6;

	#echo($ans);
if($ans < 0){
header("location:highrisk.html");
}
if($ans > 0){
header("location:LowRisk.html");
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Diabetes Checker</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_health_nutr.css" type="text/css" />
<style type="text/css">
<!--
.style7 {
	font-size: 18px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #333333;
}
.style8 {color: #9933CC}
.style10 {color: #000000; }
.style11 {font-size: 18px; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; color: #000000; }
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="2" rowspan="2"><img src="mm_health_photo.jpg" alt="Header image" width="382" height="101" border="0" /></td>
    <td width="913" height="50" id="logo" valign="bottom" align="center" nowrap="nowrap">Online Diabetes Checker </td>
    <td width="4">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" id="tagline" valign="top" align="center">&nbsp;</td>
	<td width="4">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  <td>&nbsp;</td>
  	<td colspan="3" id="dateformat" height="20"><a href="index.html">DIABETES CHECKER BY GENERAL FEATURES </a>&nbsp;&nbsp;:: <strong><a href="QuizPage2.php">DIABETES CHECKER FOR MEDICAL PROFESSIONAL</a></strong>::<strong><a href="QuizPage3.php"> OTHER DISFUNCTIONALITIES PREDICTOR</a></strong>&nbsp;&nbsp;
      <script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
 <tr>
    <td width="50">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;<br />
    &nbsp;<br />     
    <form id="form1" name="form1" method="post" action="">
      <table width="1250" border="0">
        <tr>
          <td width="355" height="47" class="style7"><div align="center" class="style10">Age</div></td>
          <td width="879" class="style7"><div align="center" class="style10">
            <label>Choose Age Range
            <select name="select">
              <option value="0">Age greater then 15</option>
              <option value="1">Age less then 15</option>
              <option value="2">Less then 11</option>
              <option value="3">Less then 5</option>
            </select>
</label>
          </div></td>
        </tr>
        <tr>
          <td height="35" class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>Sex</div></td>
          <td class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>
            <label>
            <input name="radiobutton1" type="radio" value=1 checked="checked" />
            Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <label>
             <input name="radiobutton1" type="radio" value=0 />
            Female</label>
          </div></td>
        </tr>
        <tr>
          <td height="43" class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>Area of Residence </div></td>
          <td class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>
            <label>Choose a Region
            <select name="select2">
              <option value="0">Rural</option>
              <option value="1">Urban</option>
              <option value="2">Sub-Urban</option>
            </select>
            </label>
          </div></td>
        </tr>
        <tr>
          <td rowspan="2" class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>HbA1c Level </div></td>
          <td class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>
            <label>
            <input name="radiobutton2" type="radio" value=0 checked="checked" />
            Over 7.5 %</label>
          </div></td>
        </tr>
        <tr>
          <td height="40" class="style7"><div align="center">
            <label>
            <input name="radiobutton2" type="radio" value=1 />
            Less than 7.5%</label>
          </div></td>
        </tr>
        <tr>
          <td height="49" class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>HEIGHT(in cms) </div></td>
          <td class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>
            <label>
            <input name="textfield" type="number" value="1"  required/>
            </label>
          </div></td>
        </tr>
        <tr>
          <td height="44" class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>Weight (in Kg) </div></td>
          <td class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>
            <label>
            <input name="textfield2" type="number" value="1" required/>
            </label>
          </div></td>
        </tr>
        <tr>
          <td height="62" class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>Do subject get adequate nutrition?  </div></td>
          <td class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>
            <label>
            <input name="radiobutton3" type="radio" value=0 checked="checked" />
            Yes</label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>
            <input name="radiobutton3" type="radio" value="radiobutton" />
            No</label>
          </div></td>
        </tr>
        <tr>
          <td height="46" class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>Is subject's mother educated? </div></td>
          <td class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>
            <label></label>
            <label>
            <input name="radiobutton4" type="radio" value=0 checked="checked" />
            Yes</label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>
            <input name="radiobutton4" type="radio" value=1 />
            No</label>
          </div></td>
        </tr>
        <tr>
          <td height="49" class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>Family History with Type1 Diabetes? </div></td>
          <td class="style7"><div align="center"><span class="style8"><span class="style10"></span></span>
            <label>
            <input name="radiobutton5" type="radio" value=0 checked="checked" />
            Yes</label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>
            <input name="radiobutton5" type="radio" value=1 />
            No</label>
          </div></td>
        </tr>
        <tr>
          <td height="46" class="style11"><div align="center">Family History with Type2 Diabetes? </div></td>
          <td class="style11"><div align="center">
            <label>
            <input name="radiobutton6" type="radio" value=0 checked="checked" />
            Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="radiobutton6" type="radio" value=1 />
            No</label>
          </div></td>
        </tr>
        <tr>
          <td class="style11">&nbsp;</td>
          <td class="style11"><input type="submit" name="Submit" value="Submit" /></td>
        </tr>
      </table>
    </form>
    <br />
    &nbsp;<br />	</td>
    <td width="4">&nbsp;</td>
  </tr>

 <tr>
    <td width="50">&nbsp;</td>
    <td width="332">&nbsp;</td>
    <td width="913">&nbsp;</td>
	<td width="4">&nbsp;</td>
  </tr>
</table>
</body>
</html>
