
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Add Wiki</h4>
                        </div>
                        <div class="content table-responsive table-full-width">

                            <table class="table table-hover table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Department</th>
                                <th>Wiki</th>
                                <th width="5%">&nbsp</th>
                                <th width="5%">&nbsp;</th>
                                </thead>
                                <tbody>

                                <form action="/wiki/add_exec" method="post">
                                    <input type="hidden" name="id" value="0">

                                    <tr>
                                        <td>?</td>
                                        <td><input value="" name="title" required="true"></td>
                                        <td><select required="true" name="department_id" class="selectpicker form-control">
                                                <option value="">--Choose Department--</option>
                                                <?php foreach ($departments as $row) { ?>
                                                    <option
                                                        value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                                <?php } ?>
                                            </select></td>
                                        <td>
                                        <td><input value="" name="content" required="true"></td>
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

