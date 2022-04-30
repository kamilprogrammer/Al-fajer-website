<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>مركز الادارة</title>
</head>
<body dir="rtl">
    <div id="mother">
        <form action="">
        <aside>
            <div id="div">
                <img id="logo" src="/theme/images/img-01.png" alt="LOGO">
                <h3>لوحة الادارة</h3>
                <label for="">اسم الطالب</label><br>
                <input type="text" name="name"><br>
                <label for="">رقم هاتف الأب</label><br>
                <input name = "num1" type="text" id="num"><br>
                <label for="">رقم هاتف الأم</label><br>
                <input type="text" name = "num2" id="num2"><br>
                <label for="">تاريخ الولادة</label><br>
                <input  name = "date" type="date"><br>
                <label for="">العمر</label><br>
                <input name = "num3" type="number"><br>
                <button id="add" name="add">اضافة الطالب</button>
                <button id="del" name="del">حذف الطالب
                    <a href="/theme/index.html"></a>
                </button>
            </div>
        </aside>
        <main>
            <table id="tbl">
                <tr>
                    <th>اسم الطالب</th>
                    <th>رقم هاتف الأب</th>
                    <th>رقم هاتف الأم</th>
                    <th>تاريخ الولادة</th>
                </tr>
            </table>
        </main>
    </form>
    </div>
    
    
</body>
</html>