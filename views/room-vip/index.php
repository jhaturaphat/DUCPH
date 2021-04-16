<?php
use yii\web\View;
?>

<div class="container">
    <h1>ห้องพิเศษ</h1>
    <hr> 
    <div class="row">
        <div class="col-md-2">    
        <ul class="list-group list-group-flush">
            <li class="list-group-item active" id="vip1">Cras justo odio</li>
            <li class="list-group-item" id="vip2">Dapibus ac facilisis in</li>
            <li class="list-group-item" id="vip3">Morbi leo risus</li>
            <li class="list-group-item" id="vip4">Porta ac consectetur ac</li>
            <li class="list-group-item" id="vip5">Vestibulum at eros</li>
        </ul>
        </div>
        <div class="col-md-10">
            <!-- VIP1 -->
            <div class="card" style="100%" id="vip-1">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- VIP2  -->
            <div class="card d-none" style="100%" id="vip-2">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- VIP3 -->
            <div class="card d-none" style="width: 100%" id="vip-3">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>     
    
</div>

<?php
$script = <<< JS
    $(document).ready(function() {
        $(".list-group-item").click(function () {
            $(".list-group-item").removeClass("active");  
            console.log($(this).attr("id"));
            $(this).addClass("active");
        });
    });	
JS;
$this->registerJs($script,View::POS_END);
?>

<style scoped>
    hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 10px solid #2196f3;
}
</style>