<?php
use yii\web\View;
?>

<div class="container">
    <h1>ห้องพิเศษ</h1>
    <hr>
    <div class="row">
        <div class="col-2 " role="group">
            <ul class="list-group list-group-flush text-left">
                <li class="list-group-item active" href="#tab1" data-toggle="tab" role="group">Cras justo odio</li>
                <li class="list-group-item" href="#tab2" data-toggle="tab" role="group">Dapibus ac facilisis in</li>
                <li class="list-group-item" href="#tab3" data-toggle="tab" role="group">Morbi leo risus</li>
                <li class="list-group-item" href="#tab4" data-toggle="tab" role="group">Porta ac consectetur ac</li>
                <li class="list-group-item" href="#tab5" data-toggle="tab" role="group">Vestibulum at eros</li>
            </ul>
        </div>
        <div class="clo-10">    
            <div class="tab-content row">
                <div class="tab-pane fade in active" id="tab1">
                    <img src="images/room/vip/extraroom-50-vip.jpg" class="img-thumbnail" style="margin: 0 auto">
                </div>
                <div class="tab-pane fade" id="tab2">
                    TAB2
                </div>
                <div class="tab-pane fade" id="tab3">
                    TAB3
                </div>
                <div class="tab-pane fade" id="tab4">
                    TAB4
                </div>
                <div class="tab-pane fade" id="tab5">
                    TAB5
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