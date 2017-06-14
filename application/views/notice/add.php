<title>Редактор</title>

<div class="panel panel-default opacity">
    <div class="panel-heading">
        <h4 class="title-panel-imp-note"><p class="panel-header">Дабавление/изменение заметки</p></h4>
    </div>

    <div class="panel-body">
        <?php if(!empty($_SESSION['warning'])) showWarning($_SESSION['warning']); ?>

            <?php if(empty($note)): ?>
                <!-- форма добавления заметки-->
                <form action="/notice/insert" method="post" enctype="multipart/form-data" id="formNote">
                <div class="input-group" style="width: 20%;">
                    <span class="input-group-addon">Категория *</span>
                    <select class="form-control" name="category" id="category">
                        <?php foreach($category as $key => $cat): ?>
                        <option value="<?=$key?>"><?=$cat?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <br>
                <div class="input-group" style="width: 50%;">
                    <span class="input-group-addon">Заголовок *</span>
                    <input type="text" class="form-control" name="header" id="header">
                </div>
                <br>
                <div class="input-group" style="width: 50%;">
                    <span class="input-group-addon">Описание</span>
                    <textarea type="text" class="form-control" rows="5" name="description" id="description"></textarea>
                </div>
                <br>
                <div class="input-group" style="width: 10%;">
                    <span class="input-group-addon" >Дата *</span>
                    <input type="date" class="form-control" name="date" id="date">
                </div>
                <br>
                <div class="input-group" style="width: 10%;">
                    <span class="input-group-addon">Время</span>
                    <input type="time" class="form-control" name="time" id="time" min="00:00" max="23:59">
                </div>
                <br>
                <div class="input-group" style="width: 15%;">
                    <span class="input-group-addon">Статус</span>
                    <select class="form-control" name="importance" id="importance">
                        <option value="0" class="alert alert-warning well-sm status">Не важно</option>
                        <option value="1" class="alert alert-success well-sm status">Важно</option>
                    </select>
                </div>
                <br>
<!--                <div class="input-group" style="width: 30%;">-->
<!--                    <span class="input-group-addon">Изображения</span>-->
<!--                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />-->
<!--                    <input type="file" name="images[]" class="form-control" multiple="true"/>-->
<!--                </div>-->
                <br><br>
                <div class="btn-group">
                    <input type="submit" class="btn btn-default" value="Добавить">
                    <a href="/notice" class="btn btn-default">Отмена</a>
                </div>
            </form>

            <?php else: ?>
                <!-- форма изменения заметки-->
                <form action="/notice/insert?id=<?=$note->id?>" method="post" enctype="multipart/form-data" id="formNote">
                    <div class="input-group" style="width: 20%;">
                        <span class="input-group-addon">Категория *</span>
                        <select class="form-control" name="category" id="category">
                            <?php foreach($category as $key => $cat): ?>

                                <?php if($note->category == $key): ?>
                                    <option selected value="<?=$key?>"><?=$cat?></option>
                                <?php else: ?>
                                    <option value="<?=$key?>"><?=$cat?></option>
                                <?php endif; ?>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <br>
                    <div class="input-group" style="width: 50%;">
                        <span class="input-group-addon">Заголовок *</span>
                        <input type="text" class="form-control" name="header" id="header" value="<?=$note->header?>">
                    </div>
                    <br>
                    <div class="input-group" style="width: 50%;">
                        <span class="input-group-addon">Описание</span>
                        <textarea type="text" class="form-control" rows="5" name="description" id="description"><?=$note->description?></textarea>
                    </div>
                    <br>
                    <div class="input-group" style="width: 10%;">
                        <span class="input-group-addon" >Дата *</span>
                        <input type="date" class="form-control" name="date" id="date" value="<?=date('Y-m-d',strtotime($note->date))?>">
                    </div>
                    <br>
                    <div class="input-group" style="width: 10%;">
                        <span class="input-group-addon">Время</span>
                        <input type="time" class="form-control" name="time" id="time" min="00:00" max="23:59" value="<?=getTimeFromTimestamp($note->date)?>">
                    </div>
                    <br>
                    <div class="input-group" style="width: 15%;">
                        <span class="input-group-addon">Статус</span>
                        <select class="form-control" name="importance" id="importance">
                            <option <?php if($note->importance == '0') echo 'selected'?> value="0" class="alert alert-warning well-sm status">Не важно</option>
                            <option <?php if($note->importance == '1') echo 'selected'?> value="1" class="alert alert-success well-sm status">Важно</option>
                        </select>
                    </div>
                    <br>
<!--                    <div class="input-group" style="width: 30%;">-->
<!--                        <span class="input-group-addon">Изображения</span>-->
<!--                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />-->
<!--                        <input type="file" name="images[]" class="form-control" multiple="true"/>-->
<!--                    </div>-->
                    <br><br>
                    <div class="btn-group">
                        <input type="submit" class="btn btn-default" value="Сохранить">
                        <a href="/notice" class="btn btn-default">Отмена</a>
                    </div>
                </form>

            <?php endif; ?>

    </div>
</div>