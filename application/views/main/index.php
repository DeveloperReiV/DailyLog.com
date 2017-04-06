<title>Главная</title>

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="opacity: 0.8">

    <?php  if(!empty($imp_notes)):?>

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
<!--                        <img alt="Главное на сегодня" src="--><?//=SITE_HOST . '/assets/image/important.jpg'?><!--">-->
                        <div class="container">
                            <h1 style="text-align: center">Главное на сегодня</h1>
                            <div class="carousel-caption">
                                <h1><a href="/notice/view?id=<?=$note->id?>"><?=$note->header?></a></h1>
                                <p><?=$category[$note->category]?></p>
                                <p><?=getDateFromTimestamp($note->date)?></p>
                                <p><?=getTimeFromTimestamp($note->date)?></p>
                            </div>
                        </div>
                    </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        </ol>

        <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Сегодня ничего важного</h1>
                        </div>
                    </div>
                </div>
        </div>
    <?php endif; ?>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

<div class="panel panel-default opacity">
    <div class="panel-heading">
        <h4 class="title-panel-imp-note">Важные заметки</h4>
    </div>
    <div class="panel-body">

        <div class="row">
        <?php foreach($notes as $note): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" <?if (!comparisonDate($note->date)) echo 'style="border-color: red"';?>>
                    <div class="caption">
                        <h3><a href="/notice/view?id=<?=$note->id?>"><?=$note->header?></a></h3>
                        <h4><?=getDateFromTimestamp($note->date)?></h4>
                        <p><?=mb_substr($note->description, 0, 50) . '...'?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
       </div>

    </div>
</div>