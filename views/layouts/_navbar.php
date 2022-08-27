<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\bootstrap4\Nav;
    use yii\bootstrap4\NavBar;
?>
<nav class="navbar navbar-light bg-light" style="background-color: coral;">
  <a class="navbar-brand">
  <img src="<?= Yii::getAlias('@web') ?>/img/icon/logo.png">
  โรงพยาบาลสมเด็จพระยุพราชเดชอุดม
  </a>
  <form class="form-inline d-none d-sm-block d-md-block">
    <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
  </form>
</nav>
<!--  -->
<?php
    NavBar::begin([        
        'brandUrl' => Yii::$app->homeUrl,
        'renderInnerContainer' => false,
        'options' => [
            'class' => 'row navbar navbar-expand-lg navbar-light bg-light sticky-top mt-n2',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav mr-auto h5'],
        'items' => [
            ['label'=>'หน้าแรก', 'url' => Yii::$app->homeUrl],
            [
                'options'=> ['class'=>''],
                'label' => 'ข่าวประชาสัมพันธ์', 'items' => [
                    ['label' => 'ข่าวทั่วไป', 'url' => ['/news-document']],                 
                    ['label' => 'สมัครงาน', 'url' => ['/news-document']],
                    ['label' => 'จัดซื้อจัดจ้าง', 'url' => ['/news-document']],
                    ['label' => 'กิจกรรมเฉลิมพระเกียรติ', 'url' => ['/king-event']],
            ]],
            ['label' => 'บริการผู้ป่วย', 'items' => [
                ['label' => 'ค้นหาแพทย์', 'url' => ['/doctor']],        
                ['label' => 'ตารางออกตรวจ', 'url' => '#'],        
                ['label' => 'ห้องพิเศษ', 'url' => ['/room-vip/index']],        
                ['label' => 'สิทธิผู้ป่วย', 'url' => 'https://eservices.nhso.go.th/eServices/mobile/login.xhtml'],        
            ]],
            ['label' => 'บริการของเรา', 'items' => [
                ['label' => 'บริการทั่วไป', 'url' => '#'],
                ['label' => 'บริการพิเศษ', 'url' => '#'],
                ['label' => 'ธนาคารเลือด', 'url' => '#'],
                ['label' => 'แพทย์ไทย', 'url' => '#'],
                ['label' => 'สมทบทุน', 'url' => '#'],
            ]],
            ['label' => 'เกี่ยวกับ รพ.', 'items' => [
                ['label' => 'ประวัติโรงบาล', 'url' => '#'],
                ['label' => 'วิสัยทัศน์พันธกิจ', 'url' => '#'],
                ['label' => 'นโยบายและแผน', 'url' => '#'],
                ['label' => 'โครงสร้างองกร', 'url' => '#'],
                ['label' => 'เอกสารงานคุณภาพ', 'url' => '#'],
                ['label' => 'บุคลากร', 'url' => '#'],
            ]],            
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav h5'],
        'items' => [  
            ['label' => 'ระบบหลังบ้าน', 'url' => ['/backend'], 'visible' => !Yii::$app->user->isGuest],          
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/user/security/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/user/security/logout'], 'post')
                . Html::submitButton(
                    'ออก (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-danger logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();

    $this->registerJs("
    jQuery('.animate').animateCss('bounceInUp');
    jQuery('.navbar-nav, .search').animateCss('fadeInRight');    
    ");
    ?>
