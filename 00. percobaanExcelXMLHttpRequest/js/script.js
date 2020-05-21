let addNewX = document.getElementById('addNew');
let newInput = document.querySelector('.formdiv ul');
let str = "";
let x = 1;
addNewX.addEventListener('click', function () {
    str = str + `<div class="frmInputLabel">
                    <label for="nama`+ x + `">colom : </label><br>
                    <input type="text" id="nama`+ x + `" name="nama` + x + `">
                    <input type="number" id="nama` + x + `long" name="nama` + x + `long">
                </div>`;
    newInput.innerHTML = str;
    x++;
});



let showtable = document.querySelector('.showTable');
showtable.addEventListener('dblclick', function (e) {
    cariTable(e.target.innerHTML);
    let h3header = document.querySelector('.textcenterall h3');
    h3header.innerHTML = "Create new table for " + e.target.innerHTML;
});
function cariTable(table) {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let tampilan = document.querySelector('.tampilTable');
            tampilan.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', 'myClass/ViewFunction.php?id=' + table, true);
    xhr.send();
}


