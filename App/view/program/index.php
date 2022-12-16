<div class="container" style="margin-top:60px ;">
    <div class="top">
        <div class="info" style="padding-left: 35px; padding-right:30px">
            <div style="font-size: 35px; font-weight:bold; color:#40916c">OUR PROGRAM</div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam id nam, voluptas laborum eligendi beatae
            tempora veritatis facere quae cupiditate?
        </div>
        <div class="image">
            <img src="https://images.unsplash.com/photo-1444840535719-195841cb6e2b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                style="height:100%; width:100%; object-fit: cover; border-radius:50%">
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
            </div>
            <div class="col-md-6">
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
            <div class="col-md-6">
            </div>
        </div>
    </div>
</div>
<div class="container" style="height: 100vh; width:100%; margin-top:20px">
    <div style="text-align:center; font-size:30px; font-weight: bold; color:#40916c">Brows Nonprofit fundraisers</div>
    <div class="row gx-3 gy-3 content-target" style="margin-top: 20px;">
        <?php 
            foreach ($data as $row) { ?>
        <div class="col-md-6">
            <div class="item-target">

                <div class="image-target">
                    <img src="<?= \miniframework2\App\Core\Router::Url("/public/image/program/$row->image" )?>"
                        style="height:100%; width:100%;">
                </div>
                <div class="content-program">
                    <div class="title-target"><?=$row->name ?>
                    </div>
                    <div class="info-target"><?=$row->description_program ?>
                    </div>
                    <div class="saldo-target"><?=$row->collected_donate ?> from <?=$row->donate_required ?></div>
                    <a href="<?= miniframework2\app\core\Router::Url("/public/donateprogram/$row->id") ?>"
                        class="btn btn-success my-1 mx-2">donated</a>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>