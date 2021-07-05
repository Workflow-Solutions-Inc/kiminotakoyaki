function removetocart(val)
{
  var action = val.id;
  $.ajax({
              type: 'GET',
              url: 'process/removeItemToCart.php',
              data:{action:action},

              beforeSend:function(){
              },
              success: function(data){

                alert(data);
                loadcart();
        
                loadcheckoutcart();
              }

        });
}

function getCartCount()
{
  var action = document.getElementById("custnumber").value;
  $.ajax({
              type: 'GET',
              url: 'process/getCartCount.php',
              data:{action:action},

              beforeSend:function(){
              },
              success: function(data){
               var cartcount = document.getElementById('cartcount');
                cartcount.innerHTML = data;
                // alert(data);
              }

        });
}

  function loadcheckoutcart(){
        var action = document.getElementById("custnumber").value;
            $.ajax({
                    type: 'GET',
                    url: 'process/getcheckoutcart.php',
                    data:{action:action},

                    beforeSend:function(){

                    },
                    success: function(data){
                      //alert(data);
                      if (data != "")
                      {
                        var checkoutcart = document.getElementById('checkoutcart');
                        checkoutcart.innerHTML = data;
                      }
                      
                    }

              });
      }

function loadtakuyaki(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getTakuyaki.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var takuyakidiv = document.getElementById('takuyakidiv');
                  takuyakidiv.innerHTML = data;
                }
                
              }

        });
}


function loadtakuyaksjdm(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getTakuyakiSJDM.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var sjdmtakuyakidiv = document.getElementById('sjdmtakuyakidiv');
                  sjdmtakuyakidiv.innerHTML = data;
                }
                
              }

        });
}


function loadsjdmmilktea1(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getMilktea1SJDM.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var sjdmmilkteadiv1 = document.getElementById('sjdmmilkteadiv1');
                  sjdmmilkteadiv1.innerHTML = data;
                }
                
              }

        });
}

function loadsjdmmilktea2(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getMilktea2SJDM.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var sjdmmilkteadiv2 = document.getElementById('sjdmmilkteadiv2');
                  sjdmmilkteadiv2.innerHTML = data;
                }
                
              }

        });
}

function loadsjdmmilktea3(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getMilktea3SJDM.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var sjdmmilkteadiv3 = document.getElementById('sjdmmilkteadiv3');
                  sjdmmilkteadiv3.innerHTML = data;
                }
                
              }

        });
}

function loadsjdmmilktea4(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getMilktea4SJDM.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var sjdmmilkteadiv4 = document.getElementById('sjdmmilkteadiv4');
                  sjdmmilkteadiv4.innerHTML = data;
                }
                
              }

        });
}


function loadmilktea(){
loadmilktea1();
loadmilktea2();
loadmilktea3();
loadmilktea4();
loadtipid();
loadtipid2();
loadtipid3();
loadtakuyaksjdm();
loadsjdmmilktea1();
loadsjdmmilktea2();
loadsjdmmilktea3();
loadsjdmmilktea4();
}
// Milk Tea Series
function loadmilktea1(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getMilktea1.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var milkteadiv1 = document.getElementById('milkteadiv1');
                  milkteadiv1.innerHTML = data;
                }         
                
              }

        });
}
// Premium Series
function loadmilktea2(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getMilktea2.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var milkteadiv2 = document.getElementById('milkteadiv2');
                  milkteadiv2.innerHTML = data;
                }         
                
              }

        });
}


// Choco Series
function loadmilktea3(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getMilktea3.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var milkteadiv3 = document.getElementById('milkteadiv3');
                  milkteadiv3.innerHTML = data;
                }         
                
              }

        });
}


// Cream Cheese

function loadmilktea4(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getMilktea4.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var milkteadiv4 = document.getElementById('milkteadiv4');
                  milkteadiv4.innerHTML = data;
                }         
                
              }

        });
}

// Tipid Deals

function loadtipid(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getTakoyakiDeals.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var tipidtakodiv = document.getElementById('tipidtakodiv');
                  tipidtakodiv.innerHTML = data;
                }         
                
              }

        });
}


function loadtipid2(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getMilkTeaDeals.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var tipidmilktea = document.getElementById('tipidmilktea');
                  tipidmilktea.innerHTML = data;
                }         
                
              }

        });
}

function loadtipid3(){
  var action = document.getElementById("custnumber").value;
      $.ajax({
              type: 'GET',
              url: 'process/getCombo.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  var tipidcombo = document.getElementById('tipidcombo');
                  tipidcombo.innerHTML = data;
                }         
                
              }

        });
}



function addtocart(val){
  //alert(val.id);
  
  var code = val.id;
if (val.name=="combo")
{
 var quantity = document.getElementById("Quantity-"+val.id).value;
  var toppings1 = document.getElementById("toppings-"+val.id+"-1").value;
  var res = toppings1.split("-");
  var flavor1 = document.getElementById("Flavor-"+val.id+"-1").value;
  var toppings2 = document.getElementById("toppings-"+val.id+"-2").value;
  var res2 = toppings2.split("-");
  var flavor2 = document.getElementById("Flavor-"+val.id+"-2").value;
  var flavor = flavor1+" and "+flavor2;
  var sum = (parseInt(res[1])+parseInt(res2[1]));
  var toppings = res[0]+' and '+res2[0]+'-'+sum;
  //alert(toppings);
  savetocart(code, toppings, flavor, quantity);
}
else
{
  var quantity = document.getElementById("Quantity-"+val.id).value;
  var toppings = document.getElementById("toppings-"+val.id).value;
  var flavor = document.getElementById("Flavor-"+val.id).value;
  //alert(toppings);
  if(flavor == ""){
    alert("Must Select A Flavor");
  }

  else{
    //code here
    if(code.includes("sjdm")){
    localStorage.setItem("branchid", "sjdm");
    }else{
      localStorage.setItem("branchid", "qc");
    }
   savetocart(code, toppings, flavor, quantity);
   getCartCount();
}
  
  

  }


 //alert(flavor);


}

function savetocart(code, top, flavor, quant){
    //alert(1);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function (){
      if(xmlhttp.status == 200 && xmlhttp.readyState == 4){
        message = xmlhttp.responseText;
        alert(message);
        //var cartdiv = document.getElementById('mycartdiv');
        //cartdiv.innerHTML += message;
      }
    }
    //alert(1);
    xmlhttp.open("GET","process/addItemToCart.php?prodCode="+code+ "&prodQty=" + quant + "&prodflavor=" + flavor + "&prodtop=" + top, true);
    xmlhttp.send();
}


function loadcart(){
    //alert(1);
    var action = document.getElementById("custnumber").value;
    //var itemBodyWrapper = "";
    //alert(action);
      $.ajax({
              type: 'GET',
              url: 'process/getCartItems.php',
              data:{action:action},

              beforeSend:function(){

              },
              success: function(data){
                if (data != "")
                {
                  //alert(data);
                  
                  var cartdiv = document.getElementById('mycartdiv');
                  cartdiv.innerHTML = data;
                  var chkr = document.getElementById("validatechecker").value;
                  getCartCount();
                  if(chkr==0){
                    localStorage.setItem("branchid", "");
                  }
                  //alert(chkr);

                }
                
              }

        });
  }


  // validate ->
  function validate(){

    var br = localStorage.getItem("branchid");
    
    
    if(br==""){
      document.getElementById("branchselect").style.display = "flex";
      document.getElementById("qcsection").style.display = "none";
      document.getElementById("sjdmsection").style.display = "none";

    }else if(br=="qc"){
      document.getElementById("qcsection").style.display = "block";
      document.getElementById("sjdmsection").style.display = "none";
      document.getElementById("branchselect").style.display = "none";
      alert("clear cart before you select a branch!");
    }else if(br=="sjdm"){
      document.getElementById("sjdmsection").style.display = "block";
      document.getElementById("qcsection").style.display = "none";
      document.getElementById("branchselect").style.display = "none";
      alert("Clear Cart Before Choosing A New Branch");
    }
  }
  // <- validate

