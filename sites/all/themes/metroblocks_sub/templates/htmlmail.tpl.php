  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
 <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 0; padding: 0;">
  <tr>
   <td>
     <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;margin: 10px auto;">
       <tr>
         <td align="center" bgcolor="#f6f8f9" style="padding: 0 0 40px 0;border-radius: 0px 30px 0 0;"><?php global 
		 $base_path; 
		 $theme_path = drupal_get_path('theme','metroblocks_sub');



?>
<img src="<?php echo $GLOBALS['base_url'].base_path().$theme_path; ?>/images/email-logo.gif" alt="Veolia" width="228" height="70" style="display: block;" /></td>
       </tr>	   
       <tr>
         <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
           <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
             <td style="font-family: Arial, Helvetica, sans-serif;font-size:12px;">
               <?php echo $body; ?>
             </td>
            </tr>            
           </table>
         </td>
       </tr>
       <tr>
         <td bgcolor="#a7dede" style="padding: 30px;border-radius:0px 0px 0px 30px;">
           <table border="0" cellpadding="0" cellspacing="0" width="100%">
		   <tr>
             <td  style="font-family: Arial, Helvetica, sans-serif;font-size:12px; text-align:right;">
              &copy; <?php print date('Y'); ?> DoiTrei</td>
			</tr>
           </table>
         </td>
       </tr>
     </table>
   </td>
  </tr>
 </table>
