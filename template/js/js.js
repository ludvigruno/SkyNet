window.onload=function(){


  var id = document.querySelector('#result1'); 
if(document.querySelector("#result1")){
   document.querySelector("#result1").addEventListener('click',function(event){
    var target = event.target;
      if(target.tagName == "I" && target.classList.contains("prevprevbackI")){
      var str = target.id;
      var chars = str.split('_');
      var select_line = parseInt(chars[1]);
      var tarif = document.querySelector('div.tarif_id');
      var attrTarif = tarif.getAttribute('id');
      var str1 = attrTarif;
      var chars1 = str1.split('_');
      var tarif_id = parseInt(chars1[1]);
          if(tarif_id == 0){
           var params = 'tarif_id=' + tarif_id + '&' + 'select_line=' + select_line + '&' + 'step=' + 0;
           }else if (tarif_id == 1) {
           var params = 'tarif_id=' + tarif_id + '&' + 'select_line=' + select_line + '&' + 'step=' + 0;
           }else if (tarif_id == 2) {
           var params = 'tarif_id=' + tarif_id + '&' + 'select_line=' + select_line + '&' + 'step=' + 0;
           }else if (tarif_id == 3) {
           var params = 'tarif_id=' + tarif_id + '&' + 'select_line=' + select_line + '&' + 'step=' + 0;
           }
            ajaxPost(params);
     
     }
  });
}

//Тарифы==========================================================
var id = document.querySelector('#facePage'); 
if(document.querySelector("#facePage")){
   document.querySelector("#facePage").addEventListener('click',function(event){
    var target = event.target;
      if(target.tagName == "I"){
      var str = target.id;
      var chars = str.split('_');
      var num = parseInt(chars[1]);
          if(num == 0){
           var params = 'tarif_id=' + 0 + '&' + 'step=' + 0;
           }else if (num == 1) {
           var params = 'tarif_id=' + 1 + '&' + 'step=' + 0;
           }else if (num == 2) {
           var params = 'tarif_id=' + 2 + '&' + 'step=' + 0;
           }
            ajaxPost(params);     
     }
  });
}
//Выбор конткретной линии==========================================================
var id = document.querySelector('#result'); 
if(document.querySelector("#result")){
   document.querySelector("#result").addEventListener('click',function(event){
    var target = event.target;
      if(target.tagName == "I" && target.classList.contains("icon")){
      var str = target.id;
      var chars = str.split('_');
      var select_line = parseInt(chars[1]);
      var tarif = document.querySelector('div.tarif_id');
      var attrTarif = tarif.getAttribute('id');
      var str1 = attrTarif;
      var chars1 = str1.split('_');
      var tarif_id = parseInt(chars1[1]);
          if(tarif_id == 0){
           var params = 'tarif_id=' + tarif_id + '&' + 'select_line=' + select_line + '&' + 'step=' + 1;
           }else if (tarif_id == 1) {
           var params = 'tarif_id=' + tarif_id + '&' + 'select_line=' + select_line + '&' + 'step=' + 1;
           }else if (tarif_id == 2) {
           var params = 'tarif_id=' + tarif_id + '&' + 'select_line=' + select_line + '&' + 'step=' + 1;
           }else if (tarif_id == 3) {
           var params = 'tarif_id=' + tarif_id + '&' + 'select_line=' + select_line + '&' + 'step=' + 1;
           }
            ajaxPost1(params);
     
     }else if(target.tagName == "I" && target.classList.contains("prevbackI")){
      var params = '';
     ajaxPostPrev(params);
     }
  });
}

}//end window.onload
//Ginel 1==========================================================
function ajaxPost(params){
    var request = new XMLHttpRequest();

request.onreadystatechange = function(){
  if(request.readyState == 4  && request.status == 200){
        if(request.onreadystatechange){
          }
            if(request.responseText){
              document.querySelector("#result").innerHTML = request.responseText;
              document.querySelector("#facePage").style.display = "none";
              document.querySelector("#result").style.display = "block";
              document.querySelector("#result1").style.display = "none";

            }
            //console.log(request.responseText);
      }
}
 request.open('POST', '/tarif_more/');
 request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
 request.send(params);
}
//=========================================================================
//=========================================================================
////Конкретная линия=========================================================
function ajaxPost1(params){
    var request = new XMLHttpRequest();

request.onreadystatechange = function(){
  if(request.readyState == 4  && request.status == 200){
        if(request.onreadystatechange){
          
          }
            if(request.responseText){
              document.querySelector("#result1").innerHTML = request.responseText;
              document.querySelector("#result").style.display = "none";
              document.querySelector("#result1").style.display = "block";
              document.querySelector("#prevprev").style.display = "block";
 

           }
            //console.log(request.responseText);
    }
}
 request.open('POST', '/tarif_selct_line/');
 request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
 request.send(params);
}
//=========================================================================
//=========================================================================
////Назад==================================================================
function ajaxPostPrev(params){
    var request = new XMLHttpRequest();

request.onreadystatechange = function(){
  if(request.readyState == 4  && request.status == 200){
        if(request.onreadystatechange){
          
          }
            if(request.responseText){
              document.querySelector("#facePage").innerHTML = request.responseText;
              document.querySelector("#facePage").style.display = "block";
              document.querySelector("#result").style.display = "none";
              document.querySelector("#result1").style.display = "none";
            }
            //console.log(request.responseText);
      }

}

 request.open('POST', '/x/');
 request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
 request.send(params);
}
