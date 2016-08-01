<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Access Control</h4>
                    </div>
                    <div class="content table-responsive table-full-width">

                        <table class="table table-hover table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Group</th>
                            <th>Department</th>
                            <th width="5%">&nbsp</th>
                            <th width="5%">&nbsp;</th>
                            </thead>
                            <tbody>

                            <form action="/access_control/add_exec" method="post">
                                <input type="hidden" name="id" value="0">
                                <tr>
                                    <td>?</td>
                                    <td><select  required="true" name="group_id" class="selectpicker form-control">
                                            <option value="">--Choose Group--</option>
                                            <?php foreach ($groups as $row) { ?>
                                                <option
                                                    value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                            <?php } ?>
                                        </select></td>
                                    <td><select required="true" name="department_id" class="selectpicker form-control">
                                            <option value="">--Choose Department--</option>
                                            <?php foreach ($departments as $row) { ?>
                                                <option
                                                    value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                            <?php } ?>
                                        </select></td>
                                    <td>

                                        <button type="submit" class="btn btn-secondary">
                                            Submit
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

