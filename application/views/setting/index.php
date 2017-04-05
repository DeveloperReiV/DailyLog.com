<title>Настройки</title>

<div class="panel panel-default">
    <div class="panel-heading">Фоновое изображение</div>
    <div class="panel-body">

        <div class="container-fluid">
            <div class="row">
                <form enctype="multipart/form-data" action="/setting/upload" method="post">
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                    <input type="file" name="file"><br>
                    <input type="submit" value="Загрузить">
                </form>
            </div>


            <?php foreach($images as $img): ?>
                <img src="<?=$img?>" alt=""/>
            <?php endforeach; ?>
        </div>

    </div>
</div>