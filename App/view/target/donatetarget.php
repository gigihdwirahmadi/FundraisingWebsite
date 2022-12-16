<div class="wall">
    <div class="grid">

        <div class="image">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1617450365226-9bf28c04e130?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            class="
                                d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/group-people-volunteering-foodbank-poor-people_23-2149012196.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1459183885421-5cc683b8dbba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>

        </div>

        <div class="form" style="background-color:#40916c; height:100%; width:100%">
            <form action="<?= miniframework2\app\core\Router::Url("/public/submittargettrx") ?>" method="POST">
                <input type="hidden" name="id_target" value="<?= $data ?>">
                <input type="hidden" name="id_user" value="<?= $_SESSION['user']->id ?>">
                <div style=" padding: 10px 0;
                    font-size:20px">DONATE FORM
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Total Donate</label>
                    <input type="text" class="form-control" name="donation_total" id="
                        exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Payment</label>
                    <select class="form-select" name="payment_id" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value=1>BCA</option>
                        <option value=2>BNI</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark" style="width: 100%;">Submit</button>
            </form>
        </div>
    </div>

</div>