


function calculate(){

    let val1 = parseFloat(document.form.num1.value);
    let val2 = parseFloat(document.form.num2.value);
    let operator = document.form.operator.value;
    let result = document.form.result;

    if(operator =="+"){
        result.value = val1+ val2;
        // console.log("I am inside the function");
        return false;
    }
    else if(operator =="-"){
        result.value = val1-val2;
        // console.log("I am inside the function");
        return false;
    }
    else if(operator =="/"){
        result.value = val1/val2;
        // console.log("I am inside the function");
        return false;
    }
    else if (operator == "*") {
        result.value = val1*val2;
        // console.log("I am inside the function");
        return false;
    }
   
}