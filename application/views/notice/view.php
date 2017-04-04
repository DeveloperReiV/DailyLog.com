<div class="panel panel-default">

    <div class="panel-heading">
        <h4 class="title-panel-imp-note">Подробная информация</h4>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-6">

                <table class="table">
                    <tr style="width: 60%">
                        <td class="active"><h3>Категория</h3></td>
                        <td><h3><?=$category[$note->category]?></h3></td>
                    </tr>
                    <tr>
                        <td class="active"><h3>Заметка</h3></td>
                        <td><h3><?=$note->header?></h3></td>
                    </tr>
                    <tr>
                        <td class="active"><h3>Дата и время</h3></td>
                        <td><h3><?=date('d.m.Y  G:i',strtotime($note->date))?></h3></td>
                    </tr>
                    <tr>
                        <td class="active"><h3>Статус</h3></td>
                        <td>
                            <?php if($note->importance == 1): ?>
                                <div class="alert alert-success well-sm status">Важно</div>
                            <?php else: ?>
                                <div class="alert alert-warning well-sm status">Не важно</div>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="active"><h3>Дата создания</h3></td>
                        <td><h3><?=date('d.m.Y  G:i',strtotime($note->crt_date))?></h3></td>
                    </tr>
                </table>

            </div>

            <div class="col-xs-6">
                <table class="table">
                    <tr>
                        <td class="active"><h3>Описание</h3></td>
                    </tr>
                    <tr>
                        <td><h3><?=$note->description?></h3></td>
                    </tr>
                </table>
            </div>

        </div>

        <a href="/notice"><h3><span class="label label-default">К заметкам</span></h3></a>
    </div>
</div>