<div class="wall">

    <div class="content">
        <div class="text" style="font-size:20px; font-weight:bold; padding:0 20px 0px 0; color:white">
            Transaction Target
        </div>
        <table class=" table table-dark ">
            <tr>
                <th>No</th>
                <th>donatur</th>
                <th>Target</th>
                <th>payment</th>
                <th>date</th>
                <th>is_paid</th>
                <th>action</th>
            </tr>
            <?php $no=1;  
            foreach ($data as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->donatur ?></td>
                <td><?= $row->targetname ?></td>
                <td> <?= $row->payment_name ?></td>
                <td><?= $row->created_at ?></td>
                <td>

                    <?php if  ($row->is_paid == 0){ ?>
                    <a href="<?= miniframework2\app\core\Router::Url("/public/detailtrxtarget/$row->idtrx") ?>"
                        class="btn btn-light">detail</a>
                    <?php } else { ?> Finish <?php } ?>

                </td>
                <td style="text-align: center;">
                    <form action="<?= \miniframework2\App\Core\Router::Url("/public/deletetargettrx")?>" method="POST">
                        <input type="hidden" name="id" value="<?= $row->idtrx ?>"><input type="submit"
                            class="btn btn-light" value="delete" style="float:left">
                    </form>
                </td>
            </tr>
            <?php } ?>
            </tr>
        </table>
    </div>

</div>

</div>