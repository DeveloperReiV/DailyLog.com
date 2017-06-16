<title>Настройки</title>

<div class="panel panel-default opacity">
    <div class="panel-heading">
        <h4 class="title-panel-imp-note"><p class="panel-header">Фоновое изображение</p></h4>
    </div>
    <div class="panel-body">

        <div class="row">

            <div class="col-xs-3">
                <form enctype="multipart/form-data" action="/setting/upload" method="post">
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                    <input type="file" class="form-control" name="fileBack" id="fileBack"><br>
                    <input type="submit" class="btn btn-default" value="Загрузить" id="btnLoadBack" disabled>
                </form>

                <?php if(!empty($_COOKIE['backIMG'])):?>
                    <div class="thumbnail">
                        <div class="caption" style="text-align: center;">
                            <h5>Выбрана в качестве фона</h5>
                            <img src="<?=SITE_HOST . '/application/upload/background/' . $_COOKIE['backIMG']?>?>" alt="" width="200px" height="150px"/>
                            <div class="row" id="delBack">
                                <a href="/setting/deleteback" title="Удалить фон"><span class="glyphicon glyphicon-remove"></a></span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>

            <div class="col-xs-9">
            <?php if(!empty($images)): ?>
                <?php foreach($images as $img): ?>
                    <div class="col-sm-5 col-md-3">
                        <div class="thumbnail">
                            <div class="caption" style="text-align: center;">
                                <img src="<?=SITE_HOST . '/application/upload/background/' . $img?>" alt="" width="200px" height="150px"/>
                                <div class="row">
                                    <div class="btn-group" id="panelBack">
                                        <a href="/setting/setback/?n=<?=$img?>" title="Выбрать"><span class="glyphicon glyphicon-ok"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="/setting/delete/?n=<?=$img?>" title="Удалить"><span class="glyphicon glyphicon-remove"></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-table">Изображения которые можно установить в качестве фона отсутствуют. Загрузите изображения!</p>
            <?php endif; ?>
            </div>

        </div>

        </div>
    </div>
</div>