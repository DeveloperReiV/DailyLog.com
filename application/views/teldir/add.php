<title>Редактор</title>

<div class="panel panel-default opacity">
    <div class="panel-heading">
        <h4 class="title-panel-imp-note">Дабавление телефона</h4>
    </div>

    <div class="panel-body">
        <?php if(!empty($_SESSION['warning'])) showWarning($_SESSION['warning']); ?>

        <?php
        if(!empty($_SESSION['success']))
        {
            echo '<div class="container" style="text-align: center;">';
            showSuccess($_SESSION['success']);
            echo '<a href="\teldir"><h3><span class="label label-default">К номерам</span></a>';
            echo '</div>';
        }
        ?>

        <?php if(empty($form)): ?>

            <?php if(empty($teldir)): ?>
                <form action="/teldir/insert" method="post">
                    <div class="input-group">
                        <span class="input-group-addon">Владелец *</span>
                        <input type="text" class="form-control" name="owner">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon">Телефон *</span>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <br>
                    <div class="btn-group">
                        <input type="submit" class="btn btn-default" value="Сохранить">
                        <a href="/teldir" class="btn btn-default">Отмена</a>
                    </div>
                </form>

            <?php else: ?>

                <form action="/teldir/insert?id=<?=$teldir->id?>" method="post">
                    <div class="input-group">
                        <span class="input-group-addon">Владелец *</span>
                        <input type="text" class="form-control" name="owner" value="<?=$teldir->owner?>">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon">Телефон *</span>
                        <input type="text" class="form-control" name="phone" value="<?=$teldir->phone?>">
                    </div>
                    <br>
                    <div class="btn-group">
                        <input type="submit" class="btn btn-default" value="Сохранить">
                        <a href="/teldir" class="btn btn-default">Отмена</a>
                    </div>
                </form>

            <?php endif; ?>
        <?php  endif;?>
    </div>
</div>