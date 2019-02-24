<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$data = json_decode(file_get_contents("php://input"));

$name = $data->firstName;
$surname = $data->surname;
$email= $data->email;
$cell= $data->cell;
$message= $data->message;
$subject = $data->subject;

 $msg = "  
    
    <center style='padding: 2%;'>
      <table align='center' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='bodyTable' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;height:100% !important;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;width:100% !important;background-color:#444;' >
        <tr>
          <td align='center' valign='top' id='bodyCell' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;height:100% !important;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;width:100% !important;padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;border-top-width:4px;border-top-style:solid;border-top-color:#BBBBBB;' >
            <!-- BEGIN TEMPLATE // -->
            <table border='0' cellpadding='0' cellspacing='0' id='templateContainer' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;width:60%;border-width:0;' >
              <tr>
                <td align='center' valign='top' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;' >
                  <!-- BEGIN HEADER // -->
                  <table border='0' cellpadding='0' cellspacing='0' width='100%' id='templateHeader' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;background-color:#181818;border-top-width:0;border-bottom-width:0;' >
                    <tr>
                      <td valign='top' class='headerContent' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;color:#FFD700;font-family:Helvetica;font-size:20px;font-weight:bold;line-height:100%;padding-top:20px;padding-right:0;padding-bottom:20px;padding-left:20px;text-align:center;vertical-align:middle;' >
                        <h1 style='display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:26px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' >SOUTH AFRICAN DANCE MUSIC AWARDS</h1>
                        <h1 style='display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:26px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' >2019</h1>
                      </td>
                    </tr>
                  </table>
                  <!-- // END HEADER -->
                </td>
              </tr>
              <tr>
                <td align='center' valign='top' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;' >
                  <!-- BEGIN BODY // -->
                  <table border='0' cellpadding='0' cellspacing='0' width='100%' id='templateBody' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;background-color:#F4F4F4;border-top-width:1px;border-top-style:solid;border-top-color:#FFFFFF;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#CCCCCC;' >
                    <tr>
                      <td valign='top' class='bodyContent' mc:edit='body_content' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;color:#505050;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;line-height:150%;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;text-align:left; padding:2%;' >
                        <h1 style='display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:26px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' >$subject</h1>
                        <h4>$message</h4> 
                      </td>                      
                    </tr>
                    <tr>
                        <td valign='top' class='bodyContent' mc:edit='body_content' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;color:#505050;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;line-height:150%;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;text-align:left;' >
                            <h2 style='color:#404040 !important;display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:20px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' >Sent By: </h2>    
                            <h3 style='color:#606060 !important;display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;font-style:italic;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' > $name $surname</h3>                    
                            <h3 style='color:#606060 !important;display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;font-style:italic;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' > $email</h3>                    
                            <h3 style='color:#606060 !important;display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;font-style:italic;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' > $cell</h3>                    
                        </td>
                    </tr>
                  </table>
                  <!-- // END BODY -->
                </td>
              </tr>
              <tr>
                <td align='center' valign='top' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;' >
                  <!-- BEGIN COLUMNS // -->
                  <table border='0' cellpadding='0' cellspacing='0' width='100%' id='templateColumns' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;background-color:#F4F4F4;border-top-width:1px;border-top-style:solid;border-top-color:#FFFFFF;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#CCCCCC;' >
                    <tr>
                      <td align='center' valign='top' class='templateColumnContainer' style='padding-top:20px;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;width:260px;' >
                        <table border='0' cellpadding='20' cellspacing='0' width='100%' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;' >
                        
                          <tr>
                            <td valign='top' class='leftColumnContent' mc:edit='left_column_content' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;color:#505050;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:14px;line-height:150%;padding-top:0;padding-right:20px;padding-bottom:20px;padding-left:20px;text-align:left;' >
                              <h3 style='color:#606060 !important;display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;font-style:italic;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' ><a href='http://sadma.ndu-systems.net/#/' target='_blank' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;color:#2F82DE;font-weight:normal;text-decoration:none;' >SADMA AWARDS</a></h3>
                              “ WHERE RYTHM IS CELEBRATED ”
                            </td>
                          </tr>
                        </table>
                      </td>
                      <td align='center' valign='top' class='templateColumnContainer' style='padding-top:20px;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;width:260px;' >
                        <table border='0' cellpadding='20' cellspacing='0' width='100%' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;' >
                      
                          <tr>
                            <td valign='top' class='rightColumnContent' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;color:#505050;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:14px;line-height:150%;padding-top:0;padding-right:20px;padding-bottom:20px;padding-left:20px;text-align:left;' >
                              <h3 style='color:#606060 !important;display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;font-style:italic;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' ><a href='http://www.durban.gov.za/Pages/default.aspx' target='_blank' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;color:#2F82DE;font-weight:normal;text-decoration:none;' >SPONSORED BY</a></h3>
                                eThekwini Municipality
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  <!-- // END COLUMNS -->
                </td>
              </tr>
              <tr>
                <td align='center' valign='top' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;' >
                  <!-- BEGIN FOOTER // -->
                  <table border='0' cellpadding='0' cellspacing='0' width='100%' id='templateFooter' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse !important;background-color:#F4F4F4;border-top-width:1px;border-top-style:solid;border-top-color:#FFFFFF;' >
                    <tr>
                      <td valign='top' class='footerContent' mc:edit='footer_content00' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;color:#808080;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:10px;line-height:150%;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;text-align:left;' >
                        Powered by 2019  ©  <a href='https://ndu-systems.net/#/' target='_blank' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;color:#606060;font-weight:normal;text-decoration:underline;' >Ndu Systems™</a> 
                        <br />
                         
                      </td>
                    </tr>
                  </table>
                  <!-- // END FOOTER -->
                </td>
              </tr>
            </table>
            <!-- // END TEMPLATE -->
          </td>
        </tr>
      </table>
    </center>
";

$to = "queries@ndu-systems.net, freedom.khanyile1@gmail.com	,mrnnmthembu@gmail.com"; 
$from = $email;
 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
if(mail($to, $subject, $msg, $headers)){
    echo 1;
}else{
    echo 0;
}

?>