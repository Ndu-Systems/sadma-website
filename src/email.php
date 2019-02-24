<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$email= $data->email;
$cell= $data->cell;
$message= $data->message;
$subject = "this is a test";

 $msg = "  
 <style type='text/css'>
    #outlook a{padding:0;} 
    .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} 
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} 
    body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} 
    table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} 
    img{-ms-interpolation-mode:bicubic;} 
    
    body{margin:0; padding:0;}
    img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
    table{border-collapse:collapse !important;}
    body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}
      
    #bodyCell{padding:20px;}
    #templateContainer{width:60%;}
      
    body, #bodyTable{
     background-color:#444;
    }
    #bodyCell{
     border-top:4px solid #BBBBBB;
    }
    #templateContainer{
     border: 0
    }
    
    #templateHeader{
     background-color: #181818;
     border-top: 0;
     border-bottom: 0;
    }
    
    .headerContent{
     color:#FFD700;
     font-family:Helvetica;
     font-size:20px;
     font-weight:bold;
     line-height:100%;
     padding-top: 20px;
     padding-right:0;
     padding-bottom:20px;
     padding-left:20px;
     text-align:center;
     vertical-align:middle;
    }
    
    h1{
     
    display:block;
     font-family: 'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;
     font-size:26px;
     font-style:normal;
     font-weight:bold;
     line-height:100%;
     letter-spacing:normal;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
     text-align:left;
    }
    h2{
     color:#404040 !important;
    display:block;
     font-family: 'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;
     font-size:20px;
     font-style:normal;
     font-weight:bold;
     line-height:100%;
     letter-spacing:normal;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
     text-align:left;
    }
    h3{
     color:#606060 !important;
    display:block;
     font-family: 'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;
     font-size:16px;
     font-style:italic;
     font-weight:normal;
     line-height:100%;
     letter-spacing:normal;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
     text-align:left;
    }
    h4{
     color:#808080 !important;
    display:block;
     font-family: 'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;
     font-size:14px;
     font-style:italic;
     font-weight:normal;
     line-height:100%;
     letter-spacing:normal;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
     text-align:left;
    }
    
    #templatePreheader{
     background-color:#F4F4F4;
     border-bottom:1px solid #CCCCCC;
    }
    
    .preheaderContent{
     color:#808080;
     font-family: 'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;
     font-size:10px;
     line-height:125%;
     text-align:left;
    }
    
    .preheaderContent a:link, .preheaderContent a:visited,  .preheaderContent a .yshortcuts {
     color:#606060;
     font-weight:normal;
     text-decoration:underline;
    }
    
    .headerContent a:link, .headerContent a:visited,  .headerContent a .yshortcuts {
     color:#2F82DE;
     font-weight:normal;
     text-decoration:underline;
    }
    
    #headerImage{
      height:auto;
      max-width:600px;
    }
    
    #templateBody{
     background-color:#F4F4F4;
     border-top:1px solid #FFFFFF;
     border-bottom:1px solid #CCCCCC;
    }
    
    .bodyContent{
     color:#505050;
     font-family: 'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;
     font-size:16px;
     line-height:150%;
    padding-top:20px;
    padding-right:20px;
    padding-bottom:20px;
    padding-left:20px;
     text-align:left;
    }
    
    .bodyContent a:link, .bodyContent a:visited,  .bodyContent a .yshortcuts {
     color:#2F82DE;
     font-weight:normal;
     text-decoration:none;
    }
    
    .bodyContent img{
    display:inline;
    height:auto;
    max-width:560px;
    }
    
    .templateColumnContainer{
      width:260px;
    }
    
    #templateColumns{
     background-color:#F4F4F4;
     border-top:1px solid #FFFFFF;
     border-bottom:1px solid #CCCCCC;
    }
    
    .leftColumnContent{
     color:#505050;
     font-family: 'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;;
     font-size:14px;
     line-height:150%;
    padding-top:0;
    padding-right:20px;
    padding-bottom:20px;
    padding-left:20px;
     text-align:left;
    }
    
    .leftColumnContent a:link, .leftColumnContent a:visited,  .leftColumnContent a .yshortcuts {
     color:#2F82DE;
     font-weight:normal;
     text-decoration:none;
    }
    
    .rightColumnContent{
     color:#505050;
     font-family: 'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;
     font-size:14px;
     line-height:150%;
    padding-top:0;
    padding-right:20px;
    padding-bottom:20px;
    padding-left:20px;
     text-align:left;
    }
    
    .rightColumnContent a:link, .rightColumnContent a:visited,  .rightColumnContent a .yshortcuts {
     color:#2F82DE;
     font-weight:normal;
     text-decoration:none;
    }
    
    .leftColumnContent img, .rightColumnContent img{
    display:inline;
    height:auto;
    max-width:260px;
    }
    
    #templateFooter{
     background-color:#F4F4F4;
     border-top:1px solid #FFFFFF;
    }
    
    .footerContent{
     color:#808080;
     font-family: 'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;
     font-size:10px;
     line-height:150%;
    padding-top:20px;
    padding-right:20px;
    padding-bottom:20px;
    padding-left:20px;
     text-align:left;
    }
    
    .footerContent a:link, .footerContent a:visited,  .footerContent a .yshortcuts, .footerContent a span {
     color:#606060;
     font-weight:normal;
     text-decoration:underline;
    }
    
    @media only screen and (max-width: 480px) {
      body, table, td, p, a, li, blockquote{
        -webkit-text-size-adjust:none !important;
      } 
      body{
        width:100% !important; 
        min-width:100% !important;
      } 
      #bodyCell{
        padding:10px !important;
      }
      #templateContainer{
        max-width:600px !important;
         width:100% !important;
      }
      h1{
         font-size:24px !important;
         line-height:100% !important;
      }
      h2{
         font-size:20px !important;
         line-height:100% !important;
      }
      h3{
         font-size:18px !important;
         line-height:100% !important;
      }
      h4{
         font-size:16px !important;
         line-height:100% !important;
      }
      #templatePreheader{
        display:none !important;
      } 
      #headerImage{
        height:auto !important;
         max-width:600px !important;
         width:100% !important;
      }
      .headerContent{
         font-size:20px !important;
         line-height:125% !important;      
       
      }
      .headerContent h1{
        color:#FFD700;
        }
      .bodyContent{
         font-size:16px !important;
         line-height:125% !important;
      }
      .templateColumnContainer{
        display:block !important; width:100% !important;
      }
      .columnImage{
        height:auto !important;
         max-width:480px !important;
         width:100% !important;
      }
      .leftColumnContent{
         font-size:16px !important;
         line-height:125% !important;
      }
      .rightColumnContent{
         font-size:16px !important;
         line-height:125% !important;
      }
      .footerContent{
         font-size:14px !important;
         line-height:115% !important;
      }
      .footerContent a{
        display:block !important;
      } 
    }
    </style>
    
    <center>
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
                      <td valign='top' class='bodyContent' mc:edit='body_content' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;color:#505050;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;line-height:150%;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;text-align:left;' >
                        <h1 style='display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:26px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' >[subject]</h1>
                        [message]
                      </td>                      
                    </tr>
                    <tr>
                        <td valign='top' class='bodyContent' mc:edit='body_content' style='-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;mso-table-lspace:0pt;mso-table-rspace:0pt;color:#505050;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;line-height:150%;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;text-align:left;' >
                            <h2 style='color:#404040 !important;display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:20px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' >Nominated By: </h2>    
                            <h3 style='color:#606060 !important;display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;font-style:italic;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' > [name]</h3>                    
                            <h3 style='color:#606060 !important;display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;font-style:italic;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' > [email]</h3>                    
                            <h3 style='color:#606060 !important;display:block;font-family:'Lato', 'Lucida Grande','Lucida Sans Unicode', Tahoma, Sans-Serif;font-size:16px;font-style:italic;font-weight:normal;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' > [cell]</h3>                    
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