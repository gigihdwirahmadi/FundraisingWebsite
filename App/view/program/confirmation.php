<div class="wall">
    <div class="grid">

        <div class="image">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img.freepik.com/free-photo/group-people-volunteering-foodbank-poor-people_23-2149012196.jpg"
                            class="
                                d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/group-people-volunteering-foodbank-poor-people_23-2149012196.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/group-people-volunteering-foodbank-poor-people_23-2149012196.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>

        </div>

        <div class="form" style="background-color:#40916c; height:100%; width:100%">

            <form action="<?= miniframework2\app\core\Router::Url("/public/confrimprogram") ?>" method="POST"
                enctype='multipart/form-data'>
                <input type="hidden" name="id" value="<?= $data->id ?>">
                <div style=" padding: 10px 0;
                    font-size:20px">PLEASETRANSFER YOUR DONATE IN <?= $data->rekening ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Total Donate</label>
                    <input type="file" class="form-control" name="gambar" id=" exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-dark" style="width: 100%;">Submit</button>
            </form>
        </div>
    </div>

</div>