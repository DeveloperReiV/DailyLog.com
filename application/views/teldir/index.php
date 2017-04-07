<title>Телефонная книга</title>

<div class="row">
    <div class="col-sm-12">

        <?php if(!empty($_SESSION['success']))showSuccess($_SESSION['success']); ?>

        <div class="panel panel-default opacity">

            <div class="panel-heading" style="text-align: right;">
                <a href="/teldir/add" class="btn btn-default btn-xs">Новый номер</a>
            </div>

            <div class="panel-body">
                <table class="table table-hover">

                    <thead>
                    <?php if(!empty($teldir)): ?>
                        <tr class="info table-head">
                            <td>№</td>
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
                        <?php $cnt = 1; ?>
                        <?php foreach($teldir as $item): ?>
                            <tr>
                                <td><?=$cnt?></td>
                                <td><?=$item->owner?></td>
                                <td><?=$item->phone?></td>
                                <td class="title-panel-imp-note" width="5%">
                                    <a href="/teldir/edit?id=<?=$item->id?>" title="Редактировать"><span class="glyphicon glyphicon-pencil"></a></span>
                                    <a href="/teldir/delete?id=<?=$item->id?>" title="Удалить"><span class="glyphicon glyphicon-remove"></a></span>
                                </td>
                            </tr>
                            <?php $cnt++; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>