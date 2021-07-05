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

function addtocart(val){
  //alert(val.id);
  var cboxes = document.getElementsByName('top-'+val.id);
  var top1 = cboxes[0].checked?' 1 ':' 0 ';
  var top2 = cboxes[1].checked?' 1 ':' 0 ';
  var top3 = cboxes[2].checked?' 1 ':' 0 ';
  var top4 = cboxes[3].checked?' 1 ':' 0 ';
  if(top1 == 1){
  }
  if(top2 == 1){
  }
  if(top3 == 1){
  }
  if(top4 == 1){
  }

}