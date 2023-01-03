<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tính chỉ số BMR</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="./js/script.js">

    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <style>
        
        h2,h3,h4{
            color: rgb(27, 106, 45);
        }
        *{
            font-size: medium;
        }
    </style>

</head>

<body>
   <?php
        include('header.php');
    ?>

    <div class="wrapper_content" style="margin-top: 150px;">
        <div class="count-box">
            <div class="content-form">
                <form class="form-horizontal" name="cal_frm" id="cal_frm" onsubmit="return false" style="margin-top: auto;">
                    <fieldset>

                        <!-- Form Name -->
                        <h1 style="color: rgb(37, 159, 37); text-align: center; font-size: 200px;">
                            <legend >Công cụ tính các chỉ số BMI, BMR và lượng calo nên nạp vào cơ thể</legend>
                        </h1>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="control-label">Giới tính</label>
                            <div class="">
                                <select id="opGender" name="opGender" class="form-control">
									<option value="0">Nam</option>
									<option value="1">Nữ</option>
								</select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class=" control-label">Tuổi</label>
                            <div class="">
                                <input id="txtAge" name="txtAge" class="form-control input-md" type="text">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label">Chiều cao</label>
                            <div class="">
                                <input id="txtHeight" name="txtHeight" class="form-control input-md" type="text">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="txtWeight">Cân nặng</label>
                            <div class="">
                                <input id="txtWeight" name="txtWeight" class="form-control input-md" type="text">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="control-label">Hoạt động</label>
                            <div class="">
                                <select id="opActivity" name="opActivity" class="form-control">
									<option value="0">Rất ít hoặc không tập thể dục</option>
									<option value="1">Nhẹ Nhàng (Tập thể dục nhẹ - 1-3 ngày/tuần)</option>
									<option value="2">Thường Xuyên (Tập thể dục 3-5 ngày/tuần)</option>
									<option value="3">Tích Cực (Chăm chỉ tập thể dục 6-7 ngày/tuần</option>
									<option value="4">Đam Mê (tập gấp đôi Tích cực)</option>
								</select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="thongbaoloi" class="alert alert-warning" role="alert" style="display: none;"></div>
                        </div>


                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="control-label"></label>
                            <div class="">
                                <input type="button" name="tinhbodyfat" class="btn btn-success" value="Tính BMR" onclick="Calculate()">
                                <input type="reset" class="btn btn-danger" value="Làm lại" onclick="resetAll()">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="textinput">Kết quả</label>
                            <div class="">
                                <div id="feedback" class="alert alert-success" role="alert" style="font-weight:bold;"></div>
                            </div>
                        </div>


                    </fieldset>
                </form>

            </div>
        </div>
        <img src="https://healthyeating.shop/wp-content/uploads/2021/03/che-do-an-giam-can-1.png" alt="" style="width: 100%;">
        <p>Chỉ số BMI giúp bạn xác định tình trạng hiện tại của cơ thể có đang bị béo phì hay suy dinh dưỡng không và ở mức độ như thế nào. Chỉ số BMI được tính căn cứ trên số liệu về chiều cao và cân nặng của cơ thể. Khi biết được chỉ số BMI của bản thân, bạn có thể lên kế hoạch giảm cân hoặc bổ sung dinh dưỡng phù hợp.</p>
        <h2>NHỮNG THÔNG TIN CẦN THIẾT VỀ CHỈ SỐ BMI</h2>
        <h3>I. CHỈ SỐ CÂN NẶNG BMI VÀ NHỮNG THÔNG TIN BẠN CẦN BIẾT</h3>
        <h4>Chỉ số BMI hay còn gọi là Body Mass Index: Đây là chỉ số được tính từ chiều cao và cân nặng, chỉ số này cho biết về sự mập, ốm của một người.</h4>
        <p>Chỉ số BMI không đo lường trực tiếp được lượng mỡ trên cơ thể của một người, Tuy nhiên các nghiên cứu đã chỉ ra rằng chỉ số BMI có tương quan với lượng mỡ đo trực tiếp.

 

            Công cụ tính chỉ số BMI giúp bạn không tốn kém và có thể kiểm soát các vấn đề về sức khoẻ.
            
             </p>
        <h4>Tại sao bạn cần sử dụng công cụ tính chỉ số BMI để xác định sự thừa cân và béo phì ?</h4>
        <p>Hiện nay, cách tính chỉ số BMI được xem là phương pháp tốt nhất để đánh giá những ai đang thừa cân hoặc béo phì.  Để tính chỉ số tốt nhất bạn nên sử dụng công cụ tính chỉ số BMI. Điều nay không tốn kém và dễ thực hiện.

 

            Sử dụng chỉ số BMI cho phép các chuyên gia xác định tình trạng cân nặng cảu một quần thể. Công thức tính chỉ số BMI khá đơn giản. Bạn có thể tham khảo cách tính dưới đây nhé!</p>
            <h4>Hướng dẫn cách đánh giá chỉ số BMI của cơ thể:</h4>
            <p>BMI < 16: Bạn gẩy mức độ 3 <br>
                16 ≤ BMI <17: Bạn gầy mức độ 2<br>
                17 ≤ BMI <18.5: Bạn gầy mức độ 1<br>
                18.5 ≤ BMI <25: Chỉ số BMI bình thường<br>
                25 ≤ BMI <30: Bạn đang thừa cân<br>
                30 ≤ BMI 35: Bạn béo phì mức độ 1<br>
                35 ≤ BMI <40: Bạn đang béo phì mức độ 2<br>
                BMI > 40: Bạn đang béo phì mức độ 3
                 </p>
    </div>
    <?php
        include('footer.php');
    ?>
    
    </section>

<script>
    function Calculate() {
        var ht = parseFloat(document.cal_frm.txtHeight.value);
        var wt = parseFloat(document.cal_frm.txtWeight.value);
        var ag = parseInt(document.cal_frm.txtAge.value);
        var sexf = false;
        if (document.cal_frm.opGender.value == "1") {
            sexf = true;
        }
        document.getElementById('feedback').innerHTML = '';
        var errors = '';
        if ((ht < 122) || (ht > 230) || isNaN(ht)) {
            err = '122cm đến 230cm';
            errors += 'Chiều cao phải từ ' + err + '!<br>';
        }
        if ((wt < 30) || (wt > 150) || isNaN(wt)) {
            err = '30Kg đến 150Kg';
            errors += 'Cân nặng phải từ ' + err + '!<br>';
        }
        if ((ag < 19) || (ag > 70) || isNaN(ag)) {
            err = '19 đến 70';
            errors += 'Tuổi phải từ ' + err + '!<br>';
        }
        if (errors) {
            alert('Thông tin nhập vào chưa chính xác:<br><br>' + errors);
            return;
        }
        var fatOw = 18;
        var fatOb = 25;
        var bstate = true;
        var BMR;
        var fatpercent;
        var w1;
        var s1;
        var BMI = Math.round((wt * 10000 / (ht * ht)) * 10) / 10;
        if (sexf == true) {
            fatOw = 25;
            fatOb = 31;
            BMR = 655 + (9.6 * wt) + (1.8 * ht) - (4.7 * ag);
        } else {
            BMR = 66 + (13.7 * wt) + (5 * ht) - (6.8 * ag);
        }
        BMR = Math.round(BMR * 10) / 10;
        var dailyCal;
        if (document.cal_frm.opActivity.value == "0") {
            dailyCal = BMR * 1.2;
        }
        if (document.cal_frm.opActivity.value == "1") {
            dailyCal = BMR * 1.375;
        }
        if (document.cal_frm.opActivity.value == "2") {
            dailyCal = BMR * 1.55;
        }
        if (document.cal_frm.opActivity.value == "3") {
            dailyCal = BMR * 1.725;
        }
        if (document.cal_frm.opActivity.value == "4") {
            dailyCal = BMR * 1.9;
        }
        document.getElementById('feedback').innerHTML = "<p>Chỉ số BMI của bạn là: " + BMI + "<br />" + "Chỉ số BMR của bạn là: " + BMR +
	"<br />" + "Lượng Calorie tối thiểu hàng ngày: " + (Math.round(dailyCal)) + "<br /></p>";
    }

    function logten(v) {
        return (Math.log(v) / Math.log(10));
    }

    function resetAll() {
            document.getElementById('feedback').innerHTML = '';
        }
    

	function alert(val)
		{
		    $("#thongbaoloi").show();
		    $("#thongbaoloi").html(val);
		}
		$(document).ready(function() {
			closeModal();
		});
</script>
</body>

</html>