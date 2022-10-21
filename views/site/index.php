<?php

<<<<<<< HEAD
<?= $this->render('@app/views/layouts/_slider') ?>   


=======
/** @var yii\web\View $this */
>>>>>>> 38449b242bc0a3ec929c56fa36abd1625802b71d

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>
<<<<<<< HEAD
    <div class="menu-item">
        <ul>
            <li><a href="<?= Url::toRoute('/doctor')?>"><img src="<?= Yii::getAlias('@web') ?>/img/icon/doctor.png" alt=""><label for="">ค้นหาแพทย์</label></a></li>
            <li><a href="#"><img src="<?= Yii::getAlias('@web') ?>/img/icon/dental.png" alt=""><label for="">ทันตกรรม</label></a></li>
            <li><a href="#"><img src="<?= Yii::getAlias('@web') ?>/img/icon/calendar.png" alt=""><label for="">ค้นหาบัตรนัด</label></a></li>
            <li><a href="#"><img src="<?= Yii::getAlias('@web') ?>/img/icon/other.png" alt=""><label for="">หน่วยงานที่เกี่ยวข้อง</label></a></li>
            <li><a href="http://192.168.100.1"><img src="<?= Yii::getAlias('@web') ?>/img/icon/intranet.png" alt=""><label for="">ระบบ Intranet</label></a></li>
            <li><a href="#"><img src="<?= Yii::getAlias('@web') ?>/img/icon/contact.png" alt=""><label for="">ติดต่อเรา</label></a></li>
            
        </ul>
    </div>
</div>
<!-- Conten ทั่วไป -->

<?php echo $this->render('@app/views/king-event/card') ?>       

<?php echo $this->render('@app/views/news-document/index') ?>       

<!-- <body>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>  
    <div class="fb-post" 
    data-href="https://www.facebook.com/prd.detudom/posts/3701712789896062/"
    data-width="720"></div>
</body> -->

<section id="two">
<div class="head-content pink">
<img src="<?= Yii::getAlias('@web') ?>/img/icon/mask.png" class="icon" >  
ความรู้ด้านสุขภาพ 
</div>
    <div class="conten-service">
        <div class="service-box">
            <img src="<?= Yii::getAlias('@web') ?>/img/service/xxx.png" alt="">           
            <p>
                การใช้กัญชาทางการแพทย์ เพื่อเพิ่มโอกาส
                ในการรักษาโรคให้กับประชาชนที่เจ็บป่วยทรมาน
                จากกลุ่มโรคร้ายแรง เรื้อรังและไม่ตอบสนอง
                ต่อการรักษาทั้งแพทย์แผนปัจจุบันหรือแพทย์แผนไทย..
                <a href="<?= Yii::getAlias('@web') ?>/uploads/knowledge/คู่มือการใช้กัญชาทางการแพทย์.pdf">อ่านต่อ>></a>
            </p>                
                
        </div>
        <div class="service-box">
            <img src="<?= Yii::getAlias('@web') ?>/img/service/แผนไทย.png" alt="">
            <p>
                บริการตรวจรักษาโรคทั่วไป โรครื้อรังด้วยศาสตร์
                การแพทย์แผนไทย และการแพทย์ทางเลือก โดยเน้น
                การปรุงยา และผลิตภัณฑ์จากสมุนไพรในการฟื้นฟู
                 ป้องกัน รักษาร่างกาย จากอาการโรคต่างๆ..
                 <a href="<?= Yii::getAlias('@web') ?>/uploads/knowledge/แผนยุทธศาสตร์กรมการแพทย์แผนไทย-2560-2564.pdf">อ่านต่อ>></a>
        </div>
        <div class="service-box">
            <img src="<?= Yii::getAlias('@web') ?>/img/service/ไตเทียม.png" alt="">
            <p>
                บริการอย่างครบวงจรเกี่ยวกับไตเทียม เพื่อให้การดูแล
                สำหรับผู้ป่วยโรคไตวายทั้งแบบเรื้อรังและเฉียบพลัน 
                ที่ต้องได้รับการฟอกเลือดด้วยเครื่องไตเทียม 
                ภายใต้สภาพแวดล้อมที่สะดวกสบาย สะอาด..
                <a href="<?= Yii::getAlias('@web') ?>/uploads/knowledge/ไตเทียม.pdf">อ่านต่อ>></a>
            </p>
        </div>
        <div class="service-box">
            <img src="<?= Yii::getAlias('@web') ?>/img/service/กัญชา.png" alt="">
            <p>
                การใช้กัญชาทางการแพทย์ เพื่อเพิ่มโอกาส
                ในการรักษาโรคให้กับประชาชนที่เจ็บป่วยทรมาน
                จากกลุ่มโรคร้ายแรง เรื้อรังและไม่ตอบสนอง
                ต่อการรักษาทั้งแพทย์แผนปัจจุบันหรือแพทย์แผนไทย..
                <a href="">อ่านต่อ>></a>
            </p>
        </div>
        <div class="service-box">
            <img src="<?= Yii::getAlias('@web') ?>/img/service/แผนไทย.png" alt="">
            <p>
                บริการตรวจรักษาโรคทั่วไป โรครื้อรังด้วยศาสตร์
                การแพทย์แผนไทย และการแพทย์ทางเลือก โดยเน้น
                การปรุงยา และผลิตภัณฑ์จากสมุนไพรในการฟื้นฟู
                 ป้องกัน รักษาร่างกาย จากอาการโรคต่างๆ..
                 <a href="">อ่านต่อ>></a>
                </p>
        </div>
        <div class="service-box">
            <img src="<?= Yii::getAlias('@web') ?>/img/service/ไตเทียม.png" alt="">
            <p>
                บริการอย่างครบวงจรเกี่ยวกับไตเทียม เพื่อให้การดูแล
                สำหรับผู้ป่วยโรคไตวายทั้งแบบเรื้อรังและเฉียบพลัน 
                ที่ต้องได้รับการฟอกเลือดด้วยเครื่องไตเทียม 
                ภายใต้สภาพแวดล้อมที่สะดวกสบาย สะอาด..
                <a href="">อ่านต่อ>></a>
            </p>
        </div>
    </div>
    
</section>


=======

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
>>>>>>> 38449b242bc0a3ec929c56fa36abd1625802b71d
