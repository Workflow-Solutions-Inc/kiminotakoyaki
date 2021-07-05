<html lang="en">
      
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>

  <body>
  
  
  <table style="font-family: arial, sans-serif; border-collapse:collapse; width:50%;">
   <tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
   <th colspan="6" style="text-align:center; font-size:20px; background-color:#dddddd;"> Order (Branch: '.$branchname.' ) </th>
  </tr>

 <tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6">'.$output.'</th>
  </tr>

 <tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6" style="font-size: 20px; padding: 15px;">  Total: Php'.$tprice.'.00 </th>
  </tr>

  <tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6" style="text-align:center; font-size:20px; background-color:#dddddd;"> Customer Information </th>
  </tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6"> Name: '.$fname.''.$mname.' '.$lname.'</th>
</tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6"> Email Address: '.$email.'</th>
</tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6"> Contact Number: '.$contact.'</th>
</tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6"> Facebook: '.$facebook.'</th>
</tr>





<tr rowspan="2" style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6" style="text-align:center; font-size:20px; background-color:#dddddd;"> Order Address </th>
  </tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
<th>'.$street.'&nbsp; &nbsp; '.$baranggay.' &nbsp; &nbsp; '.$city.' &nbsp; &nbsp; '.$state.'  &nbsp; &nbsp;  '.$zip.' &nbsp; &nbsp; </th>
</tr>


<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6" style="text-align:center; font-size:20px; background-color:#dddddd;"> Landmark </th>
  </tr>

  <tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6" style="text-align:left; font-size:20px;"> '.$landmark.'</th>
  </tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6" style="text-align:center; font-size:20px; background-color:#dddddd;"> Additional Notes </th>
  </tr>

<tr style=" border: 1px solid #b3afaf; text-align: left; padding: 8px;"> 
    <th colspan="6">'.$notes.'</th>
</tr>


 </table>
              
  </body>
  </html>