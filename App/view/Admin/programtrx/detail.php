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
                    target name
                </td>
                <td>
                    <?= $data->programname ?>
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
                    total
                </td>
                <td>
                    <?= $data->donation_total ?>
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
                    <img src="<?= \miniframework2\App\Core\Router::Url("/public/image/trxprogram/$data->image" ) ?>"
                        width=130 height=200>

                </td>
            </tr>
            <tr>
                <td>
                    <form action="<?= \miniframework2\App\Core\Router::Url("/public/accprogram") ?>" method="post">
                        <input type="hidden" name="id" value="<?= $data->idtrx ?>"><input type="submit"
                            class="btn btn-success" value="accept" style="width:90px">
                    </form>
                </td>
                <td>

                </td>
            </tr>
        </table>
    </div>
</div>