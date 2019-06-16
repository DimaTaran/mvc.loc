<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Add new User</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>ФИО</label>
                <input type="text" name="name" class="form-control" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <label>Область</label>

            <textarea name="country" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Город</label>
                <textarea name="city" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Район</label>
                <input type="text" name="district" class="form-control" />
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
            <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>">Cancel</a>
        </form>
    </div>
</div>