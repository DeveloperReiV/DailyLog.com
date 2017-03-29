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
                                    <td width="5%">№</td>
                                    <td width="20%">Дата</td>
                                    <td width="64%">Текст заметки</td>
                                    <td width="21%">Статус</td>
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
                                        <td><?=$note['date']?></td>
                                        <td><?=$note['note']?></td>

                                        <?php if($note['importance'] == 1): ?>
                                            <td><div class="alert alert-success well-sm status">Важно</div></td>
                                        <?php else: ?>
                                            <td><div class="alert alert-warning well-sm status">Не важно</div></td>
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
