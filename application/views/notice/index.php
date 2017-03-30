<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="#" class="list-group-item">Добавить заметку</a>
            <a href="#" class="list-group-item">Удалить заметку</a>
<!--             -->
        </div>
    </div>

    <div class="col-sm-10">
        <div class="panel panel-default">
            <div class="panel-body">

                <ul class="nav nav-tabs">
                    <?php foreach($category as $key => $cat): ?>
                        <li <?php if($key=='1') echo 'class="active"'?>><a data-toggle="tab" href="#panel<?=$key?>"><?=$cat?></a></li>
                    <?php endforeach; ?>
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
                                                <td><a href=""><?=$note['header']?></a></td>
                                                <td><?=$note['description']?></td>
                                                <td><?=getDateFromTimestamp($note['date'])?></td>
                                                <td><?=getTimeFromTimestamp($note['date'])?></td>

                                                <?php if($note['importance'] == 1): ?>
                                                    <td><div class="alert alert-success well-sm status"></div></td>
                                                <?php else: ?>
                                                    <td><div class="alert alert-warning well-sm status"></div></td>
                                                <?php endif; ?>
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
