function num(number){
    document.getElementById('textview').value += number;
}

function sum(){
    var uitkomst = document.getElementById('textview').value
    if(uitkomst){
        document.getElementById('textview').value= eval (uitkomst) ;
    }
}
    
function erase(){
    document.getElementById('textview').value = ""
}

function back(){
    var uitkomst = document.getElementById('textview').value;
    document.getElementById('textview').value = uitkomst.substring(0,uitkomst.length-1);
}