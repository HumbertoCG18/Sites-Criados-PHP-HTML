tamanho = 25;
normal = 16;

function myFunction() {
  var checkBox = document.getElementById("myCheck");

  if (checkBox.checked == true){
    document.body.style.fontSize=tamanho+"px";
  } 

  if (checkBox.checked == false){
    document.body.style.fontSize=normal+"px";
  } 
}