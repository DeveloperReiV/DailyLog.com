<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="title-panel-imp-note">Дабавление заметки</h4>
    </div>

    <div class="panel-body">

        <?php if(!empty($_SESSION['warning'])) showWarning($_SESSION['warning']); ?>
        <?php if(!empty($_SESSION['success'])) showSuccess($_SESSION['success']); ?>

        <form action="/notice/insert" method="post">
            <div class="input-group" style="width: 20%;">
                <span class="input-group-addon">Категория *</span>
                <select class="form-control" name="category">
                    <?php foreach($category as $key => $cat): ?>
                    <option value="<?=$key?>"><?=$cat?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">Заголовок *</span>
                <input type="text" class="form-control" name="header">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">Описание</span>
                <textarea type="text" class="form-control" rows="5" name="description"></textarea>
            </div>
            <br>
            <div class="input-group" style="width: 10%;">
                <span class="input-group-addon" >Дата *</span>
                <input type="date" class="form-control" name="date">
            </div>
            <br>
            <div class="input-group" style="width: 10%;">
                <span class="input-group-addon">Время</span>
                <input type="time" class="form-control" name="time">
            </div>
            <br>
            <div class="input-group" style="width: 15%;">
                <span class="input-group-addon">Статус</span>
                <select class="form-control" name="importance">
                    <option value="0" class="alert alert-warning well-sm status">Не важно</option>
                    <option value="1" class="alert alert-success well-sm status">Важно</option>
                </select>
            </div>
            <br><br>
            <div class="btn-group">
                <input type="submit" class="btn btn-default" value="Добавить">
                <a href="/notice" class="btn btn-default">Отмена</a>
            </div>
        </form>

    </div>
</div>