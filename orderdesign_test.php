<html lang="en">


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #b3afaf;
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd) {
  background-color: #dddddd;
}
</style>
      
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link href="../css/kimi-no-takoyaki-website.webflow.css" rel="stylesheet" type="text/css">
                <title>Document</title>
            </head>
            <body>
            <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"></span>
                <div class="container">
              <div class="div-block-2">
  <table>
  <tr> 
    <th colspan="6" style="text-align:center; font-size:20px;"> Order </th>
  </tr>

  <tr> 
    <th colspan="6">'.$output.'</th>
  </tr>

  <tr> 
    <th colspan="6"> Total: Php'.$tprice.'.00 </th>
  </tr>

  <tr> 
    <th colspan="6" style="text-align:center; font-size:20px;"> Customer Information </th>
  </tr>


  <tr>
   <th style="text-align:center;"> First Name</th>
   <th style="text-align:center;"> Middle Name </th>
   <th style="text-align:center;"> Last Name </th>
   <th style="text-align:center;"> Email Address </th>
   <th style="text-align:center;"> Contact Number </th>
   <th style="text-align:center;"> Facebook Account</th>
  </tr>

<tr>
   <th>'.$fname.'</th>
   <th>'.$mname.'</th>
   <th>'.$lname.'</th>
   <th>'.$email.'</th>
   <th>'.$contact.'</th>
   <th>'.$facebook.'</th>
</tr>

 <tr> 
    <th colspan="6" style="text-align:center; font-size:20px;"> Order Address </th>
  </tr>

  <tr>
   <th colspan="2" style="text-align:center;"> Street</th>
   <th style="text-align:center;"> City </th>
   <th style="text-align:center;"> State/Province </th>
   <th style="text-align:center;"> Landmark</th>
   <th style="text-align:center;"> Zip Code</th>
  </tr>



<tr>
   <th colspan="2">'.$street.'</th>
   <th>'.$city.'</th>
   <th>'.$state.'</th>
   <th>'.$landmark.'</th>
   <th>'.$zip.'</th>
</tr>

<tr> 
    <th colspan="6" style="text-align:center; font-size:20px;"> Additional Notes </th>
  </tr>

<tr> 
    <th colspan="6">'.$notes.'</th>
</tr>

 </table>

   
  </div>
</body>
  </html>