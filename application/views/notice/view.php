<title>Заметка <?=$note->header?></title>

<div class="panel panel-default opacity">

    <div class="panel-heading">
        <h4 class="title-panel-imp-note"><p class="panel-header">Подробная информация</p></h4>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-6">

                <table class="table text-table">
                    <tr style="width: 60%">
                        <td class="active head-cells"><h3>Категория</h3></td>
                        <td><h3><?=$category[$note->category]?></h3></td>
                    </tr>
                    <tr>
                        <td class="active head-cells"><h3>Заметка</h3></td>
                        <td><h3><?=$note->header?></h3></td>
                    </tr>
                    <tr>
                        <td class="active head-cells"><h3>Дата</h3></td>
                        <td><h3><?=getDateFromTimestamp($note->date)?></h3></td>
                    </tr>
                    <tr>
                        <td class="active head-cells"><h3>Время</h3></td>
                        <td><h3><?=getTimeFromTimestamp($note->date)?></h3></td>
                    </tr>
                    <tr>
                        <td class="active head-cells"><h3>Статус</h3></td>

                        <?php if($note->importance == 1): ?>
                            <td class="success"><h3>Важно</h3></td>
                        <?php else: ?>
                            <td class="warning"><h3>Не важно</h3></td>
                        <?php endif; ?>
                    </tr>
                    <tr>
                        <td class="active head-cells"><h3>Дата создания</h3></td>
                        <td><h3><?=date('d.m.Y / G:i',strtotime($note->crt_date))?></h3></td>
                    </tr>

                    <?php if(!comparisonDate($note->date)): ?>
                    <tr>
                        <td class="danger head-cells"><h3>Просрочено</h3></td>
                        <td class="danger"></td>
                    </tr>
                    <?php endif; ?>

                </table>

            </div>

            <div class="col-xs-6">
                <table class="table text-table">
                    <tr>
                        <td class="active head-cells"><h3>Описание</h3></td>
                    </tr>
                    <tr>
                        <td><h3><?=$note->description?></h3></td>
                    </tr>
                </table>
            </div>

        </div>
        <a href="/notice/edit?id=<?=$note->id?>"><h3><span class="label label-default">Редактировать</span></h3></a>
        <a href="/notice?cat=<?=$note->category?>"><h3><span class="label label-default">К заметкам</span></h3></a>

    </div>
</div>