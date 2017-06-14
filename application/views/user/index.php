<title>Личные данные</title>

<div class="panel panel-default opacity">
    <div class="panel-heading">
        <h4 class="title-panel-imp-note"><p class="panel-header">Личные данные</p></h4>
    </div>
    <div class="panel-body">

        <div class="row">
            <div class="col-xs-4">
                <?php if(file_exists(UPLOAD_DIR . 'user\ava.jpg')): ?>
                    <img src="<?=SITE_HOST . '/application/upload/user/ava.jpg'?>" alt="" style="width: 100%;" />
                <?php endif; ?>
            </div>

            <div class="col-xs-8">
                <table class="table text-table">
                    <?php foreach($user as $item): ?>
                    <tr>
                        <td class="active" style="width: 20%">Имя</td>
                        <td><?=$item->name ?></td>
                    </tr>
                    <tr>
                        <td class="active">Фамилия</td>
                        <td><?=$item->surname ?></td>
                    </tr>
                    <tr>
                        <td class="active">Отчество</td>
                        <td><?=$item->middlename ?></td>
                    </tr>
                    <tr>
                        <td class="active">Дата рождения</td>
                        <td><?=getDateFromTimestamp($item->year)?></td>
                    </tr>
                    <tr>
                        <td class="active">Телефон</td>
                        <td><?=$item->phone?></td>
                    </tr>
                    <tr>
                        <td class="active">О себе</td>
                        <td><?=$item->description?></td>
                    </tr>

                    <?php endforeach; ?>
                </table>
            </div>
        </div>

    </div>
</div>
</div>