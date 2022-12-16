<div class="wall">
    <div class="content">
        <span class="text" style="font-size:20px;font-weight:bold; padding:0 20px 0px 30px; color:white">
            Target
        </span>
        <a style="margin-left:80%;" href="<?= miniframework2\app\core\Router::Url("/public/addtarget") ?>"
            class="btn btn-dark my-0">tambah</a>
        <table class=" table table-dark ">
            <tr>
                <th>No</th>
                <th>name</th>
                <th>category</th>
                <th>description</th>
                <th>address</th>
                <th>phone</th>
                <th>image</th>
                <th width=200>action</th>
            </tr>
            <?php $no=1;  
            foreach ($data as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->name ?></td>
                <td><?= $row->category ?></td>
                <td><?= $row->description ?></td>
                <td><?= $row->address ?></td>
                <td><?= $row->phone ?></td>
                <td><img src="<?= \miniframework2\App\Core\Router::Url("/public/image/target/$row->image" ) ?>"
                        width=100 height=100 style="object-fit: cover;">

                </td>
                <td style="text-align: center">

                    <form action="<?= \miniframework2\App\Core\Router::Url("/public/deletetarget")?>" method="post">
                        <input type="hidden" name="id" value="<?= $row->id ?>"><input type="submit"
                            class="btn btn-light" value="delete" style="float:left">
                    </form>
                    <a href="<?= miniframework2\app\core\Router::Url("/public/updatetarget/$row->id") ?>"
                        class="btn btn-success">update</a>
                </td>
            </tr>
            <?php } ?>
            </tr>
        </table>
    </div>

</div>

</div>