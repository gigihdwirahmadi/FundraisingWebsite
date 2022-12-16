<div class="wall">

    <div class="bottom row gx-3">
        <div class="col-md-6">
            <div class="text" style="font-size:20px; font-weight:bold; padding:0 20px 20px 0; color:white">Recap Target
            </div>
            <table class=" table table-dark">

                <tr>
                    <th>Name</th>
                    <th>total</th>
                    <th>required</th>
                    <th>saldo</th>
                </tr>
                <?php $no=1;  
            foreach ($data1 as $row) { ?>

                <tr>
                    <td><?= $row->name ?>
                    </td>
                    <td><?= $row->required_donate ?>
                    </td>
                    <td><?= $row->collected_donate ?>
                    </td>
                    <td><?= $row->saldo_donate ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div class="col-md-6">
            <div class="text" style="font-size:20px; font-weight:bold; padding:0 20px 20px 0; color:white">Recap Program
            </div>
            <table class="table table-dark">

                <tr>
                    <th>Name</th>
                    <th>required</th>
                    <th>total</th>

                    <th>saldo</th>
                </tr>
                <?php $no=1;  
                foreach ($data2 as $row) { ?>

                <tr>
                    <td><?= $row->name ?>
                    </td>
                    <td><?= $row->donate_required ?>
                    </td>
                    <td><?= $row->collected_donate ?>
                    </td>
                    <td><?= $row->saldo_donate ?>
                    </td>
                </tr>
                <?php } ?>
            </table>

        </div>
    </div>
</div>