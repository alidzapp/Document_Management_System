<?php

function get_name_from_id($data, $id)
{

    if (is_array($data) || is_object($data)) {
        foreach ($data as $rowx) {

            if ($id == $rowx->id) {
                return $rowx->name;
            }
        }
    }
    return "";
}

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
                            <th>
                                <button type="button" class="btn btn-success" onclick="window.location.href='/user/add'">Add User</button>
                            </th>
                            </thead>
                            <thead>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th width="5%">&nbsp</th>
                            <th width="5%">&nbsp;</th>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($query as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->username; ?></td>
                                    <td><?php echo get_name_from_id($roles,$row->role_id)?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='/user/edit/<?php echo $row->id;?>'">Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" onclick="confirm_first(<?php echo $row->id;?>);">Delete</button>

                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function confirm_first(id){
        if(confirm('Are you sure you want to delete this record ?')){
            window.location.href='/user/delete_exec/'+id;
        }
    }
</script>


