<?php

function get_name_from_id($data, $id)
{

    if (is_array($data) || is_object($data)) {
        foreach ($data as $row) {

            if ($id == $row->id) {
                return $row->name;
            }
        }
    }
    return "";
}

?>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Wiki</h4>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>
                                        <button type="button" class="btn btn-success"
                                                onclick="window.location.href='/wiki/add'">Add Wiki
                                        </button>
                                    </th>
                                    </thead>
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
                                    var_dump($departments);
                                    echo "</pre>";*/
                                    foreach ($query as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row->id; ?></td>
                                            <td><?php echo $row->title; ?></td>
                                            <td><?php echo get_name_from_id($departments, $row->department_id); ?></td>
                                            <td>
                                                <button type="button" class="btn btn-info"
                                                        onclick="window.location.href='/wiki/viewwiki/<?php echo $row->id; ?>'">View
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary"
                                                        onclick="window.location.href='/wiki/edit/<?php echo $row->id; ?>'">Edit
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="confirm_first(<?php echo $row->id; ?>);">Delete
                                                </button>

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
    </div>
    <div id="menu1" class="tab-pane fade">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Wiki</h4>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>
                                        <button type="button" class="btn btn-success"
                                                onclick="window.location.href='/wiki/add'">Add Wiki
                                        </button>
                                    </th>
                                    </thead>
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
                                    var_dump($departments);
                                    echo "</pre>";*/
                                    foreach ($query as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row->id; ?></td>
                                            <td><?php echo $row->title; ?></td>
                                            <td><?php echo get_name_from_id($departments, $row->department_id); ?></td>
                                            <td>
                                                <button type="button" class="btn btn-info"
                                                        onclick="window.location.href='/wiki/viewwiki/<?php echo $row->id; ?>'">View
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary"
                                                        onclick="window.location.href='/wiki/edit/<?php echo $row->id; ?>'">Edit
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="confirm_first(<?php echo $row->id; ?>);">Delete
                                                </button>

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
    </div>
    <div id="menu2" class="tab-pane fade">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Wiki</h4>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>
                                        <button type="button" class="btn btn-success"
                                                onclick="window.location.href='/wiki/add'">Add Wiki
                                        </button>
                                    </th>
                                    </thead>
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
                                    var_dump($departments);
                                    echo "</pre>";*/
                                    foreach ($query as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row->id; ?></td>
                                            <td><?php echo $row->title; ?></td>
                                            <td><?php echo get_name_from_id($departments, $row->department_id); ?></td>
                                            <td>
                                                <button type="button" class="btn btn-info"
                                                        onclick="window.location.href='/wiki/viewwiki/<?php echo $row->id; ?>'">View
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary"
                                                        onclick="window.location.href='/wiki/edit/<?php echo $row->id; ?>'">Edit
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger"
                                                        onclick="confirm_first(<?php echo $row->id; ?>);">Delete
                                                </button>

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
    </div>
</div>

<script>
    function confirm_first(id) {
        if (confirm('Are you sure you want to delete this record ?')) {
            window.location.href = '/wiki/delete_exec/' + id;
        }
    }
</script>


