
const objH1 = document.getElementById('header');
const xhr = new XMLHttpRequest;
xhr.onreadystatechange = function(){
    if( xhr.readyState == 4 && xhr.status == 200 ){
        console.log(xhr.responseText);
    }    
}
xhr.open('GET','http://localhost/00. percobaanExcelXMLHttpRequest',true)
xhr.send();

objH1.textContent = "Hallo semua";

