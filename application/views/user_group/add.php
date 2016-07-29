<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add User to <b><?php echo $group->name;?></b></h4>
                    </div>
                    <div class="content table-responsive table-full-width">

                        <table class="table table-hover table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Username</th>
                            <th width="5%">&nbsp</th>
                            <th width="5%">&nbsp;</th>
                            </thead>
                            <tbody>

                            <form action="/user_group/add_exec" method="post">
                                <input type="hidden" name="id" value="0">
                                <input type="hidden" name="group_id" value="<?php echo $group->id;?>">
                                <tr>
                                    <td>?</td>
                                    <td><select  required="true" name="user_id" class="selectpicker form-control">
                                            <option value="">--Choose User--</option>
                                            <?php foreach ($users as $row) { ?>
                                                <option
                                                    value="<?php echo $row->id; ?>"><?php echo $row->username; ?></option>
                                            <?php } ?>
                                        </select></td>
                                    <td>

                                        <button type="submit" class="btn btn-secondary">
                                            Assign
                                        </button>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>

                            </form>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

