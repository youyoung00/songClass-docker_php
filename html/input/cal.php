<html>
    <title>계산기</title>
    <body>
        <!-- <input type="number"><br> <select name="숫자"> <option
        value="더하기">더하기</option> <option value="빼기">빼기</option> <option
        value="곱하기">곱하기</option> <input type="number"><br> </select> -->

        <form method="get" action="dap.php">
            <center>
                <input type="number" name="first">
                <br/>
                <select name="type">
                    <option value="1">더하기</option>
                    <option value="2">빼기</option>
                    <option value="3">곱하기</option>
                </select>
                <br/>
                <input type="number" name="last">
                <br/>
                <input type="submit" value="계산하기">
            </center>
        </form>
    </body>
</html>