<div class="wall">
    <div>
        <table class="table table-dark">
            <tr>
                <td>
                    donatur
                </td>
                <td>
                    <?= $data->donatur ?>
                </td>
            </tr>
            <tr>
                <td>
                    Program name
                </td>
                <td>
                    <?= $data->targetname ?>
                </td>
            </tr>
            <tr>
                <td>
                    payment
                </td>
                <td>
                    <?= $data->payment_name ?>
                </td>
            </tr>
            <tr>
                <td>
                    user address
                </td>
                <td>
                    <?= $data->addresuser ?>
                </td>
            </tr>
            <tr>
                <td>
                    Date transaction
                </td>
                <td>
                    <?= $data->created_at ?>
                </td>
            </tr>
            <tr>
                <td>
                    Image
                </td>
                <td>
                    <img src="<?= \miniframework2\App\Core\Router::Url("/public/image/trxtarget/$data->image" ) ?>"
                        width=200 height=300 style="object-fit: cover;">
                </td>
            </tr>
            <tr>
                <td>
                    <form action=" <?= \miniframework2\App\Core\Router::Url("/public/acctarget") ?>" method="post">
                        <input type="hidden" name="id" value="<?= $data->idtrx ?>"><input type="submit"
                            class="btn btn-success" value="accept" style="width:70px">
                    </form>
                </td>
                <td>

                </td>
            </tr>
        </table>
    </div>
</div>