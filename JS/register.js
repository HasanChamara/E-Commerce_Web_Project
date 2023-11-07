function validateform(){
    var x = document.forms["myform"][username].value;

    if (x=="") {
        alert("Input Not Valid");
    } 
}
console.log("A");