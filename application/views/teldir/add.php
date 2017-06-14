<title>Редактор</title>

<div class="panel panel-default opacity">
    <div class="panel-heading">
        <h4 class="title-panel-imp-note"><p class="panel-header">Дабавление/изменение телефона</p></h4>
    </div>

    <div class="panel-body">
        <?php if(!empty($_SESSION['warning'])) showWarning($_SESSION['warning']); ?>

            <?php if(empty($teldir)): ?>
                <form action="/teldir/insert" method="post" id="formPhone">
                    <div class="input-group" style="width: 50%">
                        <span class="input-group-addon">Владелец *</span>
                        <input type="text" class="form-control" name="owner" id="owner">
                    </div>
                    <br>
                    <div class="input-group" style="width: 50%">
                        <span class="input-group-addon">Телефон *</span>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <br>
                    <div class="btn-group">
                        <input type="submit" class="btn btn-default" value="Сохранить">
                        <a href="/teldir" class="btn btn-default">Отмена</a>
                    </div>
                </form>

            <?php else: ?>

                <form action="/teldir/insert?id=<?=$teldir->id?>" method="post" id="formPhone">
                    <div class="input-group" style="width: 50%">
                        <span class="input-group-addon">Владелец *</span>
                        <input type="text" class="form-control" name="owner" id="owner" value="<?=$teldir->owner?>">
                    </div>
                    <br>
                    <div class="input-group" style="width: 50%">
                        <span class="input-group-addon">Телефон *</span>
                        <input type="text" class="form-control" name="phone" id="phone" value="<?=$teldir->phone?>">
                    </div>
                    <br>
                    <div class="btn-group">
                        <input type="submit" class="btn btn-default" value="Сохранить">
                        <a href="/teldir" class="btn btn-default">Отмена</a>
                    </div>
                </form>

            <?php endif; ?>

    </div>
</div>