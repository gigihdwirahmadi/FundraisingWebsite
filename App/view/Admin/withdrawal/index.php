<div class="wall">
    <div class="content">
        <span class="text" style="font-size:20px;font-weight:bold; padding:0 20px 0px 30px; color:white">
            Target
        </span>
        <a style="margin-left:80%" href=" <?= miniframework2\app\core\Router::Url("/public/addwithdrawal") ?>"
            class="btn btn-dark my-0">tambah</a>
        <table class=" table table-dark ">
            <tr>
                <th>No</th>
                <th>Donation name</th>
                <th>Admin</th>
                <th>Total</th>
                <th>Date</th>
                <th>Saldo</th>
                <th>email adm</th>
                <th width=200>action</th>
            </tr>
            <?php $no=1;  
            foreach ($data as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td>
                    <?php if ($row->targetname){echo $row->targetname; } else { echo $row->programname;} ?>
                </td>
                <td><?= $row->adminname ?>
                </td>
                <td><?= $row->total ?></td>
                <td><?= $row->date ?></td>
                <td><?= $row->saldo_donate ?></td>
                <td><?= $row->email ?></td>
                <td style="text-align: center">

                    <form action="<?= \miniframework2\App\Core\Router::Url("/public/deletewithdrawal")?>" method="post">
                        <input type="hidden" name="id" value="<?= $row->id ?>"><input type="submit"
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