<?php
extract($_REQUEST);
if(isset($Submit)){
$ans1="";
$ans = 0;
session_start();
$ans = 
-79.146688 * 1 + 
   22.334331 * $radiobutton1 +
   24.092124 * $radiobutton2 + 
   -0.053250 * $radiobutton7 +
   11.347545 * $radiobutton3 + 
   21.862623 * $radiobutton4 +
    2.028413 * $radiobutton5 + 
    2.420403 * $radiobutton6 ; 
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
<title>Diabetes Checker</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_health_nutr.css" type="text/css" />
<style type="text/css">
<!--
.style9 {
	font-size: 16px;
	color: #FF0000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style12 {font-size: 14px; color: #FF0000; }
.style13 {
	font-size: 14px;
	font-family: "Courier New", Courier, monospace;
	color: #000000;
}
.style14 {font-size: 16px}
.style15 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style16 {
	font-size: 24px;
	color: #0000FF;
	font-weight: bold;
	font-style: italic;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="106%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="2" rowspan="2"><img src="mm_health_photo.jpg" alt="Header image" width="378" height="101" border="0" /></td>
    <td width="965" height="50" id="logo" valign="bottom" align="center" nowrap="nowrap">Online Diabetes Checker </td>
    <td width="8">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" id="tagline" valign="top" align="center">&nbsp;</td>
	<td width="8">&nbsp;</td>
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
    <td width="51">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;<br />
    &nbsp;<br />
    <form id="form1" name="form1" method="post" action="">
      <table width="1153" border="0" align="center">
        <tr>
          <td colspan="2"><div align="center" class="style9">
            <p>Have you felt thirstier, or found yourself drinking more than usual in recent weeks or months?</p>
            </div></td>
          </tr>
        <tr>
          <td width="578" height="34"><label>
            <div align="center">
              <input name="radiobutton1" type="radio" value=0 checked="checked" />
              <span class="style12">            Yes</span><br />
            </div>
          </label></td>
          <td width="565"><label>
            <div align="center">
              <input name="radiobutton1" type="radio" value=1 />
              <span class="style12">No</span><br />
            </div>
          </label></td>
        </tr>
        <tr>
          <td height="45" colspan="2"><div align="center" class="style13">
            <p>While thirst can be a symptom of diabetes, this symptom can come on gradually. With type 2 diabetes, you don&rsquo;t lose the ability to process sugar overnight, meaning the onset of excess thirst may be so gradual that you don&rsquo;t notice it.</p>
          </div>            <div align="center"></div></td>
          </tr>
        <tr>
          <td height="30" colspan="2"><div align="center">
            <p>
              <legend><span class="style9">Are you peeing more than usual?</span></legend>
            </p>
          </div>            <div align="center"></div></td>
          </tr>
        <tr>
          <td><div align="center">
            <label>
             <input name="radiobutton2" type="radio" value=0 checked="checked" />
            <span class="style12">Yes</span></label>
            <span class="style12"> - I seem to go a lot more than any one else </span></div></td>
          <td><div align="center">
            <label>
            <input name="radiobutton2" type="radio" value=1 />
            <span class="style12">No</span></label>
          </div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center" class="style13">
            <p>More frequent peeing is a symptom of diabetes, but not everyone experiences the same symptoms. In addition, this symptom can come on gradually, meaning you might not notice the increase.</p>
          </div>            
          <div align="center"></div></td>
          </tr>
        <tr>
          <td colspan="2"><div align="center">
            <p class="style9">Do you have unintended weight loss?</p>
          </div>            <div align="center"></div></td>
          </tr>
        <tr>
          <td><div align="center">
            <label>
            <input name="radiobutton3" type="radio" value=0 checked="checked" />
            <span class="style12">            Yes</span></label>
          </div></td>
          <td><div align="center">
            <label class="style12">
            <input name="radiobutton3" type="radio" value=1 />
            No</label>
          </div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center" class="style13">
            <p>Although being overweight can be a risk factor for type 2 diabetes, and losing weight unexpectedly might be a symptom of type 1 diabetes, these are not definitive symptoms of the condition.</p>
          </div>            <div align="center"></div></td>
          </tr>
        <tr>
          <td colspan="2"><div align="center" class="style9">
            <div>
              <div>
                <div color="#0F2E4C">
                  <p><span data-qa="block-title deep-purple-block-title">Have you been experiencing excessive tiredness or fatigue?</span></p>
                </div>
              </div>
            </div>
            <p>
              <div>
              <div>
              <div tabindex="-1" data-qa="focusable">
              <br />
            </p>
          </div></td>
          </tr>
        <tr>
          <td><label>
            <div align="center">
              <input name="radiobutton4" type="radio" value=0 checked="checked" />
              <span class="style12">Yes</span></div>
          </label></td>
          <td><label class="style12">
            <div align="center">
              <input name="radiobutton4" type="radio" value=1 />
              No</div>
          </label></td>
        </tr>
        <tr>
          <td colspan="2" class="style13"><p align="center">People with diabetes often feel tired due to problems with circulation. This is a common symptom of diabetes, so if you aren&rsquo;t experiencing this problem, that&rsquo;s good news! However, if you are exhibiting other signs of diabetes, you need to speak to your GP.</p></td>
          </tr>
        <tr>
          <td colspan="2"><p align="center" class="style9">Do You Have Family History of Type1 Diabetes ? </p></td>
          </tr>
        <tr>
          <td><label>
            <div align="center">
              <input name="radiobutton5" type="radio" value=0 checked="checked" />
              <span class="style12">Yes</span></div>
          </label></td>
          <td><label>
            <div align="center">
              <input name="radiobutton5" type="radio" value=1 />
              <span class="style12">No</span></div>
          </label></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"><span class="style9">Do You Have Family History of Type2 Diabetes? </span></div></td>
          </tr>
        <tr>
          <td><label>
            <div align="center" class="style12">
              <input name="radiobutton6" type="radio" value=0 checked="checked" />
              Yes</div>
          </label></td>
          <td><label>
            <div align="center">
              <input name="radiobutton6" type="radio" value=1 />
              <span class="style12">No</span></div>
          </label></td>
        </tr>
        <tr>
          <td colspan="2" class="style9"><div align="center">
            <p>Do You Feel Extreme Hunger </p>
          </div></td>
          </tr>
        <tr>
          <td><label>
            <div align="center">
              <input name="radiobutton7" type="radio" value=0 checked="checked"/>
              <span class="style12">Yes</span></div>
          </label></td>
          <td><label>
            <div align="center" class="style14">
              <input name="radiobutton7" type="radio" value=1 />
              <span class="style12">              No</span></div>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="Submit" value="Submit" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center" class="style15">
            <p class="style16"></p>
          </div></td>
          </tr>
      </table>
    </form>     <br />
    &nbsp;<br />	</td>
    
    </td>
 </tr>

 <tr>
    <td width="51">&nbsp;</td>
    <td width="335">&nbsp;</td>
    <td width="965">&nbsp;</td>
	<td width="8">&nbsp;</td>
  </tr>
</table>
</body>
</html>
