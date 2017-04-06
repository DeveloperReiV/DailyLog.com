<title>Настройки</title>

<div class="panel panel-default opacity">
    <div class="panel-heading">Фоновое изображение</div>
    <div class="panel-body">

        <div class="row">

            <div class="col-xs-3">
                <form enctype="multipart/form-data" action="/setting/upload" method="post">
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                    <input type="file" class="form-control" name="file"><br>
                    <input type="submit" class="btn btn-default" value="Загрузить">
                    <br><br>
                    <?php if(!empty($_COOKIE['backIMG'])):?>
                    <div class="thumbnail">
                        <div class="caption" style="text-align: center;">
                            <h5>Выбрана в качестве фона</h5>
                            <img src="<?=SITE_HOST . '/application/upload/background/' . $_COOKIE['backIMG']?>?>" alt="" width="200px" height="150px"/>
                        </div>
                    </div>
                    <?php endif; ?>
                </form>
            </div>

            <div class="col-xs-9">
            <?php foreach($images as $img): ?>
                <div class="col-sm-5 col-md-3">
                    <div class="thumbnail">
                        <div class="caption" style="text-align: center;">
                            <img src="<?=SITE_HOST . '/application/upload/background/' . $img?>" alt="" width="200px" height="150px"/>
                            <div class="btn-group">
                                <a href="/setting/setback/?n=<?=$img?>" title="Выбрать"><span class="glyphicon glyphicon-ok"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="/setting/delete/?n=<?=$img?>" title="Удалить"><span class="glyphicon glyphicon-remove"></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>

        </div>

        </div>
    </div>
</div>