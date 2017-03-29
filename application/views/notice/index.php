<div class="row">

</div>


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
                                <tr class="success table-head">
                                    <td width="10%">№</td>
                                    <td width="20%">Дата</td>
                                    <td width="60%">Текст заметки</td>
                                    <td width="20%">Статус</td>
                                </tr>
                            <?php else: ?>
                                <tr class="success table-head">
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
                                        <td><?=$note['importance']?></td>
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
