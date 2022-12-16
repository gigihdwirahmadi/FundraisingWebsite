<div class="wall1">


    <form action="<?= miniframework2\app\core\Router::Url("/public/changetarget") ?>" method="POST">
        <div class="w3">
            <div class="wall3">
                <div class="child">

                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $data->id ?>">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" value="<?= $data-> name ?>" name="name"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputPassword1" class="form-label">Category</label>
                        <select class="form-select" name="category" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="foundation">foundation</option>
                            <option value="individu">individu</option>
                        </select>
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputPassword1" class="
                            form-label">Address</label>
                        <input type="text" class="form-control" value="<?= $data->address ?>" id="exampleInputPassword1"
                            name="address">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">donate-required</label>
                        <input type="number" value="<?= $data->required_donate ?>" class="form-control"
                            name="required_donate" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="child">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                            rows="4"><?= $data->description ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">phone</label>
                        <input type="text" class="form-control" value="<?= $data->phone ?>" name="phone"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="width: 100%;">Submit</button>
            </div>

        </div>
    </form>

</div>
</form>