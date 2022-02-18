<html>
    <head>
        <title>form</title>
    </head>
    
    <body>
        <center>
        <h1>바둑판 만들기</h1>
        <form action="rel.php" method="GET">
            <table width="30%" height="10%">
                <tr align="center"> 
                    <td colspan="2">가로 : <input type="number" name="row" placeholder="가로를 입력하세요"></td>
                    
                </tr>

                <tr align="center">
                    <td colspan="2">세로 : <input type="number" name="col" placeholder="세로를 입력하세요"></td>
                    
                </tr>

                <tr align="center">
                    <td><input type="submit" value="만들기">&nbsp&nbsp&nbsp&nbsp&nbsp
                        <!-- <a href="join.html"><input type="button" value="회원가입"></a> -->
                    </td>
                </tr>
            </table>
        </form> 

<!-- 
        <table border="1" width="10px" height="10px" >
            <tr>
                <td></td>
            </tr>
        </table> -->
    </center>
    </body>
</html>