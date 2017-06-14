<title>Главная</title>

<?php if($imp_notes): ?>
<div class="panel panel-default opacity">
    <div class="panel-heading">
        <h4 class="title-panel-imp-note"><p class="panel-header">Важное на сегодня</p></h4>
    </div>
    <div class="panel-body">

        <div class="row">
            <?php foreach($imp_notes as $note): ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail boxNote" <?if (!comparisonDate($note->date)) echo 'style="border-color: red"';?>>
                        <div class="caption">
                            <h3><a href="/notice/view?id=<?=$note->id?>" class="title-note"><?=$note->header?></a></h3>
                            <h4><?=getDateFromTimestamp($note->date) . "  " . getTimeFromTimestamp($note->date)?></h4>

                            <?php if(strlen($note->description) > 50):?>
                            <p class="text-table"><?=mb_substr($note->description, 0, 50) . '...'?></p>
                            <?php else: ?>
                            <p class="text-table"><?=$note->description?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<?php endif; ?>

<div class="panel panel-default opacity">
    <div class="panel-heading">
        <h4 class="title-panel-imp-note"><p class="panel-header">Важные заметки</p></h4>
    </div>
    <div class="panel-body">

        <div class="row">
        <?php foreach($notes as $note): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail boxNote" <?if (!comparisonDate($note->date)) echo 'style="border-color: red"';?>>
                    <div class="caption">
                        <h3><a href="/notice/view?id=<?=$note->id?>" class="title-note"><?=$note->header?></a></h3>
                        <h4><?=getDateFromTimestamp($note->date)?></h4>

                        <?php if(strlen($note->description) > 50):?>
                            <p class="text-table"><?=mb_substr($note->description, 0, 50) . '...'?></p>
                        <?php else: ?>
                            <p class="text-table"><?=$note->description?></p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
       </div>

    </div>
</div>