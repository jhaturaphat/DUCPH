<?php
use yii\web\View;
?>

<div class="container">
    <h1>ห้องพิเศษ</h1>
    <hr> 
    <div class="row">
        <div class="col-mdpa-3">    
        <ul class="list-group list-group-flush">
            <li class="list-group-item active" id="vip1">หอผู้ป่วยพิเศษศัลยกรรม ออร์โธปิดิกส์</li>
            <li class="list-group-item" id="vip2">หอผู้ป่วยพิเศษสูติ-นรีเวชกรรม</li>
            <li class="list-group-item" id="vip3">หอผู้ป่วยพิเศษกุมารเวชกรรม</li>
            <li class="list-group-item" id="vip4">หอผู้ป่วยพิเศษรวม</li>
        </ul>
        </div>
        <div class="col-md-9">
            <!-- VIP1 -->
            <div class="card " style="100%" id="vip-1">
                <img class="card-img-top" src="<?= Yii::getAlias('@web') ?>/images/room/vip/ศัลยกรรมกระดูก.png" alt="Card image cap">
                <div class="p-3 text-white" style="background-color:#56b8aa;">หอผู้ป่วยพิเศษศัลยกรรม ออร์โธปิดิกส์</div>
                <div class="card-body text-center">                    
                    <p class="card-text">โรงพยาบาลสมเด็จพระยุพราชเดชอุดม มีห้องพิเศษสำหรับไว้บริการ แก่ผู้ป่วยเฉพาะแต่ละกลุ่มโรค<br>
                    ภายในห้องห้องพิเศษ มีอุปกรณ์ อำนวยความสะดวกที่ครบครัน เช่น เครื่องปรับอากาศ โทรทัศน์ <br>
                    ตู้เย็น เครื่องทำน้ำอุ่น กระติกน้ำร้อน ฯลฯ</p>
                    <h5 class="card-title">ห้องพิเศษเดี่ยวราคา 1,200 บาท</h5>
                </div>
                <div class="p-3 text-white text-center" style="background-color:#56b8aa;"><h4>ติดต่อสอบถาม  บริการจองห้องพิเศษ อาคาร 5 ชั้น1 โทร 045-361133-4 ต่อ 625</h4></div>
            </div>
            <!-- VIP2  -->
            <div class="card d-none" style="100%" id="vip-2">
            <img class="card-img-top" src="<?= Yii::getAlias('@web') ?>/images/room/vip/สูติ-นรีเวชกรรม.png" alt="Card image cap">
                <div class="p-3 text-white" style="background-color:#ff589f;">หอผู้ป่วยพิเศษสูติ-นรีเวชกรรม</div>
                <div class="card-body text-center">                    
                    <p class="card-text">โรงพยาบาลสมเด็จพระยุพราชเดชอุดม มีห้องพิเศษสำหรับไว้บริการ แก่ผู้ป่วยเฉพาะแต่ละกลุ่มโรค<br>
                                        ภายในห้องห้องพิเศษ มีอุปกรณ์ อำนวยความสะดวกที่ครบครัน เช่น เครื่องปรับอากาศ โทรทัศน์<br>
                                        ตู้เย็น เครื่องทำน้ำอุ่น กระติกน้ำร้อน ฯลฯ</p>
                    <h5 class="card-title">ห้องพิเศษเดี่ยวราคา 1,200 บาท</h5>
                </div>
                <div class="p-3 text-white text-center" style="background-color:#ff589f;"><h4>ติดต่อสอบถาม  บริการจองห้องพิเศษ อาคาร 5 ชั้น1 โทร 045-361133-4 ต่อ 625</h4></div>
            </div>
            <!-- VIP3 -->
            <div class="card d-none" style="width: 100%" id="vip-3">
                <img class="card-img-top" src="<?= Yii::getAlias('@web') ?>/images/room/vip/กุมารเวชกรรม.png" alt="Card image cap">
                <div class="p-3 text-white" style="background-color:#ff589f;">หอผู้ป่วยพิเศษกุมารเวชกรรม</div>
                <div class="card-body text-center">                    
                    <p class="card-text">โรงพยาบาลสมเด็จพระยุพราชเดชอุดม มีห้องพิเศษสำหรับไว้บริการ แก่ผู้ป่วยเฉพาะแต่ละกลุ่มโรค<br>
                        ภายในห้องห้องพิเศษ มีอุปกรณ์ อำนวยความสะดวกที่ครบครัน เช่น เครื่องปรับอากาศ โทรทัศน์ <br>
                        ตู้เย็น เครื่องทำน้ำอุ่น กระติกน้ำร้อน ฯลฯ</p>
                    <h5 class="card-title">ห้องพิเศษเดี่ยวราคา 1,000 บาท</h5>
                </div>
                <div class="p-3 text-white text-center" style="background-color:#56b8aa;"><h4>ติดต่อสอบถาม  บริการจองห้องพิเศษ อาคาร 5 ชั้น1 โทร 045-361133-4 ต่อ 625</h4></div>
            </div>
            <!-- VIP4 -->
            <div class="card d-none" style="width: 100%" id="vip-4">
                <img class="card-img-top" src="<?= Yii::getAlias('@web') ?>/images/room/vip/พิเศษรวม.png" alt="Card image cap">
                <div class="p-3 text-white" style="background-color:#5194c1;">หอผู้ป่วยพิเศษรวม</div>
                <div class="card-body text-center">                    
                    <p class="card-text">โรงพยาบาลสมเด็จพระยุพราชเดชอุดม มีห้องพิเศษสำหรับไว้บริการ แก่ผู้ป่วยเฉพาะแต่ละกลุ่มโรค<br>
                        ภายในห้องห้องพิเศษ มีอุปกรณ์ อำนวยความสะดวกที่ครบครัน เช่น เครื่องปรับอากาศ โทรทัศน์ <br>
                        ตู้เย็น เครื่องทำน้ำอุ่น กระติกน้ำร้อน ฯลฯ</p>
                    <h5 class="card-title">ห้องพิเศษเดี่ยวราคา 1,000 บาท</h5>
                </div>
                <div class="p-3 text-white text-center" style="background-color:#5194c1;"><h4>ติดต่อสอบถาม  บริการจองห้องพิเศษ อาคาร 5 ชั้น1 โทร 045-361133-4 ต่อ 625</h4></div>
            </div>
        </div>
    </div>     
    <br>
</div>

<?php
$script = <<< JS
    $(document).ready(function() {
        $(".list-group-item").click(function () {
            $(".list-group-item").removeClass("active");  
            let eleID = '#'+$(this).attr("id").substring(0 ,3) +"-" + $(this).attr("id").substring(3,4);
            $(this).addClass("active");

            $('.card').each(function(){
                $( this ).addClass( "d-none" );
            });
            console.log(eleID);
            $(eleID).removeClass("d-none");
        });
    });	
JS;
$this->registerJs($script,View::POS_END);
?>

<style scoped>
.list-group-item{
    cursor: pointer;
}
    hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 10px solid #2196f3;
}
</style>