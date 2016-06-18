<html>
<head>
    <title>Калькулятор</title>
    <link href="style.css" rel="stylesheet">
    <script src="calculator.js" async></script>
</head>
<body>
<form id="calculatorForm" style="display: none">
    <table class="tableCalculator" cellpadding=0 cellspacing=0>
        <tr>
            <td colspan=5 align=middle>
                <input id="mainField" name="mainField" type="Text"
                       value="0">
            </td>
        </tr>
        <tr>
            <td><input name="btn7" type="Button"
                       value="7" onclick="btnNum(7)"></td>
            <td><input name="btn8" type="Button"
                       value="8" onclick="btnNum(8)"></td>
            <td><input name="btn9" type="Button"
                       value="9" onclick="btnNum(9)"></td>
            <td><input name="btnPlus" type="Button"
                       value="+" onclick="btnOperator('+')" /></td>
            <td><input name="btnMultiply" type="Button"
                       value="*" onclick="btnOperator('*')" /></td>
        </tr>
        <tr>
            <td><input name="btn4" type="Button"
                       value="4" onclick="btnNum(4)" onkeydown="4"></td>
            <td><input name="btn5" type="Button"
                       value="5" onclick="btnNum(5)"></td>
            <td><input name="btn6" type="Button"
                       value="6" onclick="btnNum(6)"></td>
            <td><input name="btnMinus" type="Button"
                       value="-" onclick="btnOperator('-')" /></td>
            <td align=middle><input name="btnDivide" type="Button"
                                    value=" / " onclick="btnOperator('/')" /></td>
        </tr>
        <tr>
            <td><input name="btn1" type="Button"
                       value="1" onclick="btnNum(1)"></td>
            <td><input name="btn2" type="Button"
                       value="2" onclick="btnNum(2)"></td>
            <td><input name="btn3" type="Button"
                       value="3" onclick="btnNum(3)"></td>
            <td><input name="btnClear" type="Button"
                       value="C" onclick="btnC()" /></td>
            <td><input name="btnClearEntry" type="Button"
                       value="CE" onclick="btnCE()" /></td>
        </tr>
        <tr>
            <td><input name="btn0" type="Button"
                       value="0" onclick="btnNum(0)"></td>
            <td><input name="btnDecimal" type="Button"
                       value="." onclick="btnDot()"></td>
            <td><input name="btnNeg" type="button"
                       value="+/-" onclick="reverseSign()" /></td>
            <td colspan="2"><input id="btnWide" name="btnEquals"
                                   type="Button" value="=" onclick="btnOperator('=')"></td>
        </tr>
    </table>
</form>
<input type="button" id="showButton" value="Показать" onclick="showCalculator()">
</body>
</html>