<div class="wall1">

    <div class="wall2">
        <form action="<?= miniframework2\app\core\Router::Url("/public/postlogin") ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class=" mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <a href="<?= miniframework2\app\core\Router::Url("/public/registeruser") ?>" style="color:#40916c">register
            </a>
            <button type=" submit" class="btn btn-success my-2" style="width: 100%;">Submit</button>
        </form>
    </div>
</div>