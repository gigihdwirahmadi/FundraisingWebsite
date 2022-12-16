<div class="container" style="margin-top:60px ;">
    <div class="top">
        <div class="image">
            <img src="https://img.freepik.com/free-photo/group-people-volunteering-foodbank-poor-people_23-2149012196.jpg"
                style="height:100%; width:100%; object-fit: cover; border-radius:20px">
        </div>
        <div class="info" style="padding-left: 35px;padding-right:20px">
            <div style="font-size: 35px; font-weight:bold; color:#40916c">OUR TARGET</div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam id nam, voluptas laborum eligendi beatae
            tempora veritatis facere quae cupiditate?
        </div>
    </div>
</div>
<div class="content" style="margin-top: 30px; background-color:#40916c; width:100%">
    <div class="container  ">
        <div class="row">
            <div class=" col-md-6">
                <div class="title">
                    Nonprofit fundraisers
                </div>
                <div style=" color:white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione veniam, doloremque quibusdam rem
                    architecto
                    commodi deserunt placeat explicabo tenetur adipisci velit temporibus enim debitis sint ipsam odio
                    expedita
                    voluptate id?
                </div>
            </div>
            <div class="col-md-6">
                <div class="title">
                    Give happines for everyone
                </div>
                <div style=" color:white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione veniam, doloremque quibusdam rem
                    architecto
                    commodi deserunt placeat explicabo tenetur adipisci velit temporibus enim debitis sint ipsam odio
                    expedita
                    voluptate id?
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="height: 100vh; width:100%; margin-top:20px">
    <div style="text-align:center; font-size:30px; font-weight: bold; color:#40916c">Brows Nonprofit fundraisers</div>
    <div class="row gx-3 gy-3 content-target" style="margin-top: 20px;">
        <?php 
            foreach ($data as $row) { ?>
        <div class="col-md-3">
            <div class="item-target">

                <div class="image-target">
                    <img src="<?= \miniframework2\App\Core\Router::Url("/public/image/target/$row->image" )?>"
                        style="height:100%; width:100%;">
                </div>

                <div class="title-target">
                    <?= $row->name ?>
                </div>
                <div class="info-target" style="overflow-y: scroll"> <?= $row->description ?>
                </div>
                <div class="saldo-target"> <?= $row->collected_donate ?> from <?= $row->required_donate ?></div>
                <div class="button-target"> <a
                        href="<?= miniframework2\app\core\Router::Url("/public/donatetarget/$row->id") ?>"
                        class="btn btn-success">donated</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>