<title>Заметки</title>

<div class="panel panel-default opacity" style="text-align: center;">
    <div class="panel-body">
        <table class="table" style="margin: 0; text-align: center;">
            <tr>
                <td class="danger">Просроченные заметки</td>
                <td class="success">Важные заметки</td>
                <td class="warning">Не важные заметки</td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default opacity">
            <div class="panel-body">

                <ul class="nav nav-tabs">
                    <?php foreach($category as $key => $cat): ?>
                        <li <?php if($key=='1') echo 'class="active"'?>><a data-toggle="tab" href="#panel<?=$key?>"><?=$cat?></a></li>
                    <?php endforeach; ?>

                    <div class="btn-group" style="float: right;">
                        <a href="/notice/add" class="btn btn-default btn-xs">Новая заметка</a>
                    </div>

                </ul>

                <div class="tab-content">

                    <?php foreach($category as $key => $cat): ?>
                        <div id="panel<?=$key?>" class="tab-pane fade <?php if($key=='1') echo 'in active'?>">
                            <br>
                            <div class="table-responsive">
                                <table class="table table-hover">

                                    <thead>
                                    <?php if(isset($notices[$key])): ?>
                                        <tr class="info table-head">
                                            <td>№</td>
                                            <td>Заметка</td>
                                            <td>Описание</td>
                                            <td>Дата</td>
                                            <td>Время</td>
                                            <td>Статус</td>
                                            <td></td>

                                        </tr>
                                    <?php else: ?>
                                        <tr class="info table-head">
                                            <td>Записей в данной категории нет</td>
                                        </tr>
                                    <?php endif; ?>
                                    </thead>

                                    <tbody>
                                    <?php if(isset($notices[$key])): ?>
                                        <?php $cnt = 1; ?>
                                        <?php foreach($notices[$key] as $note): ?>
                                            <tr>
                                                <td><?=$cnt?></td>

                                                <?php  if(comparisonDate($note['date'])):?>
                                                    <td><a href="/notice/view?id=<?=$note['id']?>"><?=$note['header']?></a></td>
                                                <?php  else: ?>
                                                    <td class="danger"><a href="/notice/view?id=<?=$note['id']?>"><?=$note['header']?></a></td>
                                                <?php  endif;?>

                                                <td><?=$note['description']?></td>
                                                <td><?=getDateFromTimestamp($note['date'])?></td>
                                                <td><?=getTimeFromTimestamp($note['date'])?></td>

                                                <?php if($note['importance'] == 1): ?>
                                                    <td class="success"></td>
                                                <?php else: ?>
                                                    <td class="warning"></td>
                                                <?php endif; ?>

                                                <td class="title-panel-imp-note" width="5%">
                                                    <a href="/notice/edit?id=<?=$note['id']?>" title="Редактировать заметку '<?=$note['header']?>'"><span class="glyphicon glyphicon-pencil"></a></span>
                                                    <a href="/notice/delete?id=<?=$note['id']?>" title="Удалить заметку '<?=$note['header']?>'"><span class="glyphicon glyphicon-remove"></a></span>
                                                </td>
                                            </tr>
                                            <?php $cnt++; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>


            </div>
        </div>
    </div>
</div>
