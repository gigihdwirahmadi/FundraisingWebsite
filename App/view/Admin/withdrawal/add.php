<div class="wall1">


    <form action="<?= miniframework2\app\core\Router::Url("/public/submitwithdrawal") ?>" method="POST"
        enctype='multipart/form-data'>
        <div class="w3">
            <div class="wall3">
                <input type="hidden" name="admin_id" value="<?= $_SESSION['admin']->id ?>">
                <div class=" mb-3">
                    <label for="exampleInputPassword1" class="form-label">Select Category</label>
                    <select class="form-select" id="target" name="target" onchange="run()">
                        <option selected>Open this select menu</option>
                        <option value="target">"Target</option>
                        <option value="program">"Program</option>
                    </select>
                </div>
                <div class=" mb-3" id="inner">

                </div>
                <div class=" mb-3">
                    <label for="exampleInputEmail1" class="form-label">total</label>
                    <input type="number" class="form-control" name="total" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-success" style="width: 100%;">Submit</button>
            </div>

        </div>
    </form>

</div>
</form>

<script>
function run() {
    let category = document.getElementById("target").value;
    console.log(category);
    let inner = document.getElementById("inner");
    let text;
    if (category == "program") {
        text = `  <label for="exampleInputPassword1" class="form-label">Program</label>
                    <select class="form-select" name="item" >
                        <option selected>Open this select menu</option>
                        <?php foreach ($data2 as $row) { ?>
                        <option value="<?= $row->id ?>"><?= $row->name ?></option>
                        <?php } ?>
                    </select>`
    } else {
        text = `  <label for="exampleInputPassword1" class="form-label">Target</label>
                    <select class="form-select" name="item">
                        <option selected>Open this select menu</option>
                        <?php foreach ($data1 as $row) { ?>
                        <option value="<?= $row->id ?>"><?= $row->name ?></option>
                        <?php } ?>
                    </select>`
    }
    inner.innerHTML = text;
}
</script>