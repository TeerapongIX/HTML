@extends('template.default')

@section('title','Workshop FORM')
@section('content')
<h1  style="text-align: center;">Workshop #HTML - FORM</h1>
    <form>
        <table border="0" cellpadding="5" style="margin: 0 auto;">
            <tr>
                <td style="width: 170px ;" ><b ">ชื่อ</b></td>
                <td>
                    <input type="text" name="firstname" id="firstname">
                    <span id="msg_firstname" style="font-size: 12px;"></span>
                </td>
            </tr>
            <tr>
                <td><b>สกุล</b></td>
                <td>
                    <input type="text" name="lastname" id="lastname">
                    <span id="msg_lastname" style="font-size: 12px;"></span>
                </td>
            </tr>
            <tr>
                <td><b>วัน/เดือน/ปีเกิด</b></td>
                <td>
                    <input type="date" name="birthday" id="birthday">
                    <span id="msg_birthday" style="font-size: 12px;"></span>
                </td>
            </tr>
            <tr>
                <td><b>อายุ</b></td>
                <td>
                    <input type="text" name="age" id="age">
                    <span id="msg_age" style="font-size: 12px;"></span>
                </td>
            </tr>

            <tr>
                <td><b>เพศ</b></td>
                <td id="td_sex">
                    <input type="radio" id="men" name="sex" value="men">
                    <label for="men">ชาย</label>
                    <input type="radio" id="women" name="sex" value="women">
                    <label for="women">หญิง</label>
                    <span id="msg_sex" style="font-size: 12px;"></span>
                </td>
            </tr>

            <tr>
                <td><b>รูป</b></td>
                <td>
                    <input type="file" id="myfile" name="myfile">
                    <span id="msg_myfile" style="font-size: 12px;"></span>
                </td>
            </tr>

            <tr>
                <td><b>ที่อยู่</b></td>
                <td>
                    <textarea rows="5" cols="20" name="address" id="address"></textarea>
                    <br>
                    <span id="msg_address" style="font-size: 12px;"></span>
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
                <td id="td_music">
                    <input type="radio" id="life" name="music_style" value="เพื่อชีวิต">
                    <label for="life">เพื่อชีวิต</label>
                    <input type="radio" id="luktung" name="music_style" value="ลูกทุ่ง">
                    <label for="luktung">ลูกทุ่ง</label>
                    <input type="radio" id="other" name="music_style" value="อื่นๆ">
                    <label for="other">อื่นๆ</label>
                    <span id="msg_music" style="font-size: 12px;"></span>
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
                    <input type="reset" value="Reset" style="background-color: #dc3545; color: white; padding: 10px 25px; border: none; border-radius: 5px; cursor: pointer; font-size: 14px;">

                </td>

                <td><br>
                    <input type="button" value="Submit Register" onclick="checkForm()"
       style="background-color: #007bff; color: white; padding: 10px 25px; border: none; border-radius: 5px; cursor: pointer; font-size: 14px;">
                </td>
            </tr>
        </table>
    </form>
@endsection

@push('scripts')
    <script>
        function checkForm() {
            // เช็คยินยอมก่อน
            let consent = document.getElementById("consent");
            if (consent.checked == false) {
                alert("⚠️ กรุณา ยินยอมให้เก็บข้อมูล ⚠️");
                return; // จบการทำงานทันที ไม่ทำข้างล่างต่อ
            }
            // เอาตัวแปร
            let firstname = document.getElementById("firstname");
            let lastname  = document.getElementById("lastname");
            let birthday  = document.getElementById("birthday");
            let age       = document.getElementById("age");
            let address   = document.getElementById("address");
            let myfile    = document.getElementById("myfile");

            let sexChecked   = document.querySelector('input[name="sex"]:checked');
            let musicChecked = document.querySelector('input[name="music_style"]:checked');

            // ดึงกล่องข้อความ
            let msgFirstname = document.getElementById("msg_firstname");
            let msgLastname  = document.getElementById("msg_lastname");
            let msgBirthday  = document.getElementById("msg_birthday");
            let msgAge       = document.getElementById("msg_age");
            let msgAddress   = document.getElementById("msg_address");
            let msgFile      = document.getElementById("msg_myfile");
            let msgSex       = document.getElementById("msg_sex");
            let msgMusic     = document.getElementById("msg_music");

            // เช็คสถานะรวม
            let isAllValid = true;


            // เช็คชื่อ
            if (firstname.value == "") {
                firstname.style.border = "2px solid red";
                msgFirstname.innerHTML = "กรุณากรอกชื่อ";
                msgFirstname.style.color = "red";
                isAllValid = false;
            } else {
                firstname.style.border = "2px solid green";
                msgFirstname.innerHTML = "ถูกต้อง";
                msgFirstname.style.color = "green";
            }

            // เช็คนามสกุล
            if (lastname.value == "") {
                lastname.style.border = "2px solid red";
                msgLastname.innerHTML = "กรุณากรอกนามสกุล";
                msgLastname.style.color = "red";
                isAllValid = false;
            } else {
                lastname.style.border = "2px solid green";
                msgLastname.innerHTML = "ถูกต้อง";
                msgLastname.style.color = "green";
            }

            // เช็ควันเกิด
            if (birthday.value == "") {
                birthday.style.border = "2px solid red";
                msgBirthday.innerHTML = "กรุณาเลือกวันเกิด";
                msgBirthday.style.color = "red";
                isAllValid = false;
            } else {
                birthday.style.border = "2px solid green";
                msgBirthday.innerHTML = "ถูกต้อง";
                msgBirthday.style.color = "green";
            }

            // เช็คอายุ
            if (age.value == "") {
                age.style.border = "2px solid red";
                msgAge.innerHTML = "กรุณากรอกอายุ";
                msgAge.style.color = "red";
                isAllValid = false;
            } else {
                age.style.border = "2px solid green";
                msgAge.innerHTML = "ถูกต้อง";
                msgAge.style.color = "green";
            }

            // เช็คเพศ
            if (sexChecked == null) {
                msgSex.innerHTML = "กรุณาเลือกเพศ";
                msgSex.style.color = "red";
                isAllValid = false;
            } else {
                msgSex.innerHTML = "";
                msgSex.style.color = "green";
            }

            // เช็ครูป
            if (myfile.value == "") {
                msgFile.innerHTML = "กรุณาอัปโหลดรูป";
                msgFile.style.color = "red";
                isAllValid = false;
            } else {
                msgFile.innerHTML = "อัปโหลดแล้ว";
                msgFile.style.color = "green";
            }

            // เช็คที่อยู่
            if (address.value == "") {
                address.style.border = "2px solid red";
                msgAddress.innerHTML = "กรุณากรอกที่อยู่";
                msgAddress.style.color = "red";
                isAllValid = false;
            } else {
                address.style.border = "2px solid green";
                msgAddress.innerHTML = "ถูกต้อง";
                msgAddress.style.color = "green";
            }

            // เช็คแนวเพลง
            if (musicChecked == null) {
                msgMusic.innerHTML = "กรุณาเลือกแนวเพลง";
                msgMusic.style.color = "red";
                isAllValid = false;
            } else {
                msgMusic.innerHTML = "";
                msgMusic.style.color = "green";
            }

            // แจ้งเตือนการส่ง
            if (isAllValid) {
                alert("ข้อมูลครบถ้วน พร้อมส่ง!");

            } else {
                alert("ข้อมูลไม่ครบถ้วน ไม่พร้อมส่ง!");

            }
        }
    </script>
@endpush
