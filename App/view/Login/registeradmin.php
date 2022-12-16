<div class="wall1">


    <form action="<?= miniframework2\app\core\Router::Url("/public/postregisteradmin") ?>" method="POST">
        <div class="w3">
            <div class="wall3">

                <div class="child">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id=" exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id=" exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id=" exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">born place</label>
                        <input type="date" class="form-control" name="born_place" id=" exampleInputPassword1">
                    </div>
                </div>
                <div class="child">
                    <div class=" mb-3">
                        <label for="exampleInputPassword1" class=" form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputPassword1" class=" form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="exampleInputPassword1">
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputPassword1" class=" form-label">username</label>
                        <input type="text" class="form-control" name="username" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class=" form-label">Gender</label>
                        <select class="form-select" name="gender" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                </div>
                <button type="submit" class="btn btn-success" style="width: 100%;">Submit</button>
            </div>

        </div>
    </form>

</div>