<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>HTML-FORM</title>
    <style>
        body {
            font-family: "Sarabun", sans-serif;
            font-weight: 500;
            font-style: normal;
            }
        
        input[type="text"], 
        input[type="date"], 
        input[type="number"], 
        select, textarea {
            border: 1px solid #686767ff;
            border-radius: 3px;  
        }
        
        
        
    </style>
</head>
<body>
    <h1>WORKSHOP #HTML-FORM</h1>
    <form>
        <table border="0">
            <tr>
                <td style="width: 120px;"><b>ชื่อ</b></td>
                <td><input type="text" name="firstname"></td>
            </tr>
            <tr>
                <td><b>สกุล</b></td>
                <td><input type="text" name="lastname"></td>
            </tr>
            <tr>
                <td><b>วัน/เดือน/ปีเกิด</b></td>
                <td><input type="date" name="birthday" ></td>
            </tr>
            <tr>
                <td><b>อายุ</b></td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td><b>เพศ</b></td>
                <td>
                    <input type="radio" id="men" name="sex" value="men">
                    <label for="men">ชาย</label>
                    <input type="radio" id="women" name="sex" value="women">
                    <label for="women">หญิง</label>
                </td>
            </tr>
            <tr>
                <td><b>รูป</b></td>
                <td>
                    <input type="file" id="myfile" name="myfile">
                </td>
            </tr>
            
            <tr>
                <td><b>ที่อยู่</b></td>
                <td>
                    <textarea rows="5" cols="20" name="address"></textarea>
                </td>
            </tr>
            <tr>
                <td><b>สีที่ชอบ</b></td>
                <td>
                    <select name="fav_color">
                        <option value="red">สีแดง</option>
                        <option value="green">สีเขียว</option>
                        <option value="blue">สีน้ำเงิน</option>
                        <option value="yellow">สีเหลือง</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>แนวเพลงที่ชอบ</b></td>
                <td>
                    <input type="radio" id="life" name="music_style" value="เพื่อชีวิต">
                    <label for="life">เพื่อชีวิต</label>
                    <input type="radio" id="luktung" name="music_style" value="ลูกทุ่ง">
                    <label for="luktung">ลูกทุ่ง</label>
                    <input type="radio" id="other" name="music_style" value="อื่นๆ">
                    <label for="other">อื่นๆ</label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <input type="checkbox" id="consent" name="consent" >
                    <label for="consent"><b>ยินยอมให้เก็บข้อมูล</b></label>
                    
                </td>
            </tr>
            <tr>
                <td><br>
                    <input type="reset" value="Reset">
                </td>
                
                <td><br>
                    <input type="submit" value="Submit" style="margin-left: 100px;">
                </td>
            </tr>
            
        </table>
    </form> </body>
</html>