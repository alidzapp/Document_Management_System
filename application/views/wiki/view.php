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
    <?php
    $counter = 0;
    foreach ($departments as $tab) {
        ?>
        <li <?php if ($counter == 0){ ?>class="active"<?php } ?>><a data-toggle="tab"
                                                                    href="#home<?php echo $tab->id ?>"><?php echo $tab->name ?></a>
        </li>

        <?php
        $counter += 1;
    } ?>
</ul>


<div class="tab-content">
    <?php
    $counter = 0;
    foreach ($departments as $tab) {
        ?>
        <div id="home<?php echo $tab->id ?>" class="tab-pane fade <?php if ($counter == 0){ ?>in active<?php } ?>">
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
                                            if($row->department_id!=$tab->id){
                                                continue;
                                            }
                                            ?>
                                            <tr>
                                                <td><?php echo $row->id; ?></td>
                                                <td><?php echo $row->title; ?></td>
                                                <td><?php echo get_name_from_id($departments, $row->department_id); ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-info"
                                                            onclick="window.location.href='/wiki/viewwiki/<?php echo $row->id; ?>'">
                                                        View
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary"
                                                            onclick="window.location.href='/wiki/edit/<?php echo $row->id; ?>'">
                                                        Edit
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
        <?php
        $counter += 1;
    } ?>
</div>

<script>
    function confirm_first(id) {
        if (confirm('Are you sure you want to delete this record ?')) {
            window.location.href = '/wiki/delete_exec/' + id;
        }
    }
</script>


