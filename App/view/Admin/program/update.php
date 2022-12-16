<div class="wall1">


    <form action="<?= miniframework2\app\core\Router::Url("/public/changeprogram") ?>" method="POST"
        enctype='multipart/form-data'>
        <div class="w3">
            <div class="wall3">
                <div class="child">

                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $data->id ?>">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" value="<?= $data->name ?>" class="form-control" name="name"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputPassword1" class="form-label">Start Program</label>
                        <input type="date" value="<?= $data->start_program ?>" class=" form-control"
                            id="exampleInputPassword1" name="start_program">
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputPassword1" class="form-label">End Program</label>
                        <input type="date" value="<?= $data->end_program ?>" class="form-control"
                            id="exampleInputPassword1" name="end_program">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">donate-required</label>
                        <input type="number" value="<?= $data->donate_required ?>" class="form-control"
                            name="donate_required" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="child">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea class="form-control" name="description_program" id="exampleFormControlTextarea1"
                            rows="8"><?= $data->description_program ?></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-success" style="width: 100%;">Submit</button>
            </div>

        </div>
    </form>

</div>
</form>