<?php
//var_dump($query);
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Wiki</h4>
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
                            <?php
                            /*echo "<pre>";
                            var_dump($query);
                            echo "</pre>";*/
                            foreach ($query as $row) {

                            ?>

                            <form action="/wiki/edit_exec" method="post">
                                <input type="hidden" name="id" value="<?php echo $row->id; ?>">

                                <tr>
                                    <td><?php echo $row->id; ?></td>
                                    <td><input value="<?php echo $row->title; ?>" name="title" required="true"></td>
                                    <td><select required="true" name="department_id" class="selectpicker form-control">
                                            <option value="">--Choose Department--</option>
                                            <?php foreach ($departments as $rowd) { ?>
                                                <option
                                                    value="<?php echo $rowd->id; ?>"><?php echo $rowd->name; ?></option>
                                            <?php } ?>
                                        </select></td>
                                    <td>
                                    <td><input value="<?php echo $row->content; ?>" name="content" required="true"></td>
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


