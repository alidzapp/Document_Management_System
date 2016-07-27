<?php
//var_dump($query);
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">User</h4>
                    </div>
                    <div class="content table-responsive table-full-width">

                        <table class="table table-hover table-striped">
                            <thead>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            </thead>
                            <thead>
                            <th>ID</th>
                            <th>Username</th>
                            <th width="5%">&nbsp</th>
                            <th width="5%">&nbsp;</th>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($query as $row) {
                            ?>
                            <form action="/user/edit_exec" method="post">
                                <input type="hidden" name="id" value="<?php echo $row->id; ?>">

                                <tr>
                                    <td><?php echo $row->id; ?></td>
                                    <td><input type="email" value="<?php echo $row->username; ?>" name="username" required="true"></td>
                                    <td>

                                        <button type="submit" class="btn btn-secondary">
                                            Submit
                                        </button>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <?php
                                }
                                ?>
                            </form>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


