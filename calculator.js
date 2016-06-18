var Operand1, Operand2, Operator;
var field = document.getElementById("mainField"); //Поле ввода и вывода резальтата
var newOperation = true;

function btnNum (Num)
{
    if(newOperation) {
        field.value = 0;
        newOperation = false;
    }
    if (field.value == "0") {
        field.value = Num;
    }
    else {
        field.value += Num;
    }
}

function btnOperator (Op)
{
    if (Op != "=") {
        Operator = Op;
        Operand1 = +field.value;
        field.value = 0;
    }
    else {
        Operand2 = +field.value;
        newOperation = true;
        switch (Operator) {
            case "+":
                field.value = Operand1 + Operand2;
                break;

            case "-":
                field.value = Operand1 - Operand2;
                break;

            case "*":
                field.value = Operand1 * Operand2;
                break;

            case "/":
                field.value = Operand1 / Operand2;
                break;

        }
        Operand1 = "";
        Operand2 = "";
        Operator = "";
    }
}

function btnDot()
{
    //Добавляем точку, только если её нет
    if(field.value.indexOf(".") == -1) {
        field.value += '.';
    }
}

function btnCE()
{
    field.value = 0;
}

function btnC()
{
    field.value = 0;
    Operand1 = "";
    Operand2 = "";
    Operator = "";
}


function reverseSign()
{
    field.value = field.value * -1;
}

function keyboard(event) {
    //Обработка цифр
    if(event.key >= "0" && event.key <= "9") {
        btnNum(event.key);
    }
    //Обработка операторов
    switch(event.key) {
        case "+": btnOperator("+");
            break;

        case "-": btnOperator("-");
            break;

        case "*": btnOperator("*");
            break;

        case "/": btnOperator("/");
            break;

        case "=": btnOperator("=");
            break;

        case "Enter": btnOperator("=");
            break;

        case ".": btnDot();
            break;

        case "c": btnC();    //При нажатии backspase
            break;

        case "Delete": btnCE();   //При нажатии delete
            break;
    }
    event.stopPropagation();
}

addEventListener("keydown", keyboard);
