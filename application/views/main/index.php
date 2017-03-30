<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php $i = 1; ?>
        <?php foreach($imp_notes as $note): ?>
            <li data-target="#myCarousel" data-slide-to="<?=$note->id?>" class="<?= ($i == 1) ? 'active' : '';?>"></li>
        <?php $i++; ?>
        <?php endforeach; ?>
    </ol>

    <div class="carousel-inner">
        <?php $i = 1; ?>
        <?php foreach($imp_notes as $note): ?>
                <div class="item <? if($i == 1) echo 'active';?>">
                    <img alt="Главное на сегодня" src="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><?=$note->header?></h1>
                            <p><?=$note->date?></p>
                            <p><?=$note->description?></p>
                        </div>
                    </div>
                </div>
            <?php $i++; ?>
        <?php endforeach; ?>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="title-panel-imp-note">Важные заметки</h4>
    </div>
    <div class="panel-body">

        <div class="row">
        <?php foreach($notes as $note): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><a href=""><?=$note->header?></a></h3>
                        <h4><?=getDateFromTimestamp($note->date)?></h4>
                        <p><?=$note->description?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
       </div>

    </div>
</div>