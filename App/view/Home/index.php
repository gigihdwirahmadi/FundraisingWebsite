<div style="height: 600px; width:100%; background-color:#243119" class="homeimagetext">
    <div class="texthome" style="height:40%; padding-left:100px">
        <div style="font-size:60px">LetsFund</div>
        <div style="font-size: 20px; width:500px">With one-quarter of our global team dedicated to trust and safety,
            we’ve
            successfully managed fundraisers worldwide for more than a decade. Don’t worry about a thing, we’ve got you
            covered.</div>
        <div style="margin-top:10px; ">
            <?php if (isset($_SESSION['admin'])||isset($_SESSION['user'])) { ?>
            <a href="<?= miniframework2\app\core\Router::Url("/public/targetindexwebsite") ?>" class="btn btn-success"
                style="
                height:50px ;width:120px; font-size:16px">
                Join now
            </a>
            <?php } else { ?>
            <a href="<?= miniframework2\app\core\Router::Url("/public/login") ?>" class="btn btn-success" style="
                height:50px ;width:120px; font-size:16px">
                Join now
            </a>

            <?php } ?>
        </div>
    </div>
    <img src="
            https://images.unsplash.com/photo-1542810634-71277d95dcbb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
        style="width: 100%;opacity: 0.4; object-fit: cover" height="100%" />

</div>

<div class="element row gx-4 gy-3" style="padding:30px 100px;height:auto; margin-top: 0px; background-color:#40916c;">
    <div class="col-md-4">
        <div class="content-div-home">
            <div style="font-size: 20px; font-weight:bold"> Non Profit </div>
            our organization is a non-profit organization that actively conducts donation activities
        </div>
    </div>
    <div class=" col-md-4">
        <div class="content-div-home">
            <div style="font-size: 20px; font-weight:bold"> Help everyone </div>

            Our organization helps everyone who needs help
        </div>
    </div>
    <div class="col-md-4">
        <div class="content-div-home">
            <div style="font-size: 20px; font-weight:bold"> Volunteering</div>
            we are actively doing fundraising both online and offline
        </div>
    </div>
</div>
<div class="texthomebottom" style="width:100%; height:400px; margin-top:50px; padding-right:100px">
    <div class=" text2">

        <div>
            <p style="font-size: 30px; font-weight:bold">Our Goals
            </p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta officia provident, nisi iure odio
            inventore,
            neque quibusdam dolore mollitia eos alias commodi natus unde voluptates. Ducimus vero dolores
            laborum
            quaerat?
        </div>
    </div>
    <div style="height: 100%;background-color:black; border-radius:30px"> <img
            src="
            https://images.unsplash.com/photo-1490424660416-359912d314b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=800"
            style="width: 100%;opacity: 0.7; object-fit: cover;border-radius:30px" height="100%" />
    </div>
</div>