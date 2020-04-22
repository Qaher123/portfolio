function change_size(){
    var size = document.getElementById("size");
    var tekst = document.getElementById("tekst");

    tekst.style.fontSize = size.value + "px";
}

function change_family(){
    var font = document.getElementById("family");
    var tekst = document.getElementById("tekst");

    tekst.style.fontFamily = font.value;
}

function change_bg(){
    var bg = document.getElementById("bg");
    body = document.getElementsByTagName("body");
    var tekst = document.getElementById("tekst");

    body[0].style.background = bg.value;
    tekst.style.background = bg.value;
}
function change_color(){
    var color = document.getElementById("color");
    var tekst = document.getElementById("tekst");

    tekst.style.color = color.value;
}

function change_text(){
    document.getElementById("tekst").value = document.getElementById("person").value
};