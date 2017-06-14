<title>Телефонная книга</title>

<div class="row">
    <div class="col-sm-12">

        <div class="panel panel-default opacity">

            <div class="panel-heading" style="text-align: right;">
                <a href="/teldir/add" class="btn btn-default btn-xs">Новый номер</a>
            </div>

            <div class="panel-body">

                <?php if(!empty($_SESSION['success']))showSuccess($_SESSION['success']); ?>

                <table class="table table-hover">

                    <thead>
                    <?php if(!empty($teldir)): ?>
                        <tr class="info table-head">
                            <td>Владелец</td>
                            <td>Телефон</td>
                            <td></td>
                        </tr>
                    <?php else: ?>
                        <tr class="info table-head">
                            <td>Телефонная книга пуста</td>
                        </tr>
                    <?php endif; ?>
                    </thead>

                    <tbody>
                    <?php if(!empty($teldir)): ?>
                        <?php foreach($teldir as $item): ?>
                            <tr>
                                <td><?=$item->owner?></td>
                                <td><?=$item->phone?></td>
                                <td class="title-panel-imp-note" width="5%">
                                    <a href="/teldir/edit?id=<?=$item->id?>" title="Редактировать <?=$item->phone?>"><span class="glyphicon glyphicon-pencil"></a></span>
                                    <a href="/teldir/delete?id=<?=$item->id?>" title="Удалить <?=$item->phone?>"><span class="glyphicon glyphicon-remove"></a></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>

                </table>

                <?php if(!empty($teldir) && $count_page>1): ?>
                    <ul class="pagination">
                        <li><a href="teldir?p=1">&laquo;</a></li>
                        <?php for($i = 1; $i<=$count_page; $i++): ?>
                            <li <?php if($i == $p || empty($p)) echo 'class="active"' ?>><a href="teldir?p=<?=$i?>"><?=$i?></a></li>
                        <?php endfor; ?>
                        <li><a href="teldir?p=<?=$count_page?>">&raquo;</a></li>
                    </ul>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>