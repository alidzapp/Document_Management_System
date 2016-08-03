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
                            <form action="/wiki/add_exec" method="post">
                                <input type="hidden" name="id" value="0">
                                <tbody>

                                <tr>
                                    <td>Topic</td>
                                    <td><input value="" name="title" required="true"></td>
                                </tr>
                                <tr>
                                    <td>Department</td>
                                    <td><select required="true" name="department_id" class="selectpicker form-control">
                                            <option value="">--Choose Department--</option>
                                            <?php foreach ($departments as $row) { ?>
                                                <option
                                                    value="<?php echo $row->id; ?>" <?php if(count($departments)==1){?>selected<?php }?> ><?php echo $row->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Wiki</td>
                                    <td>
                                        <textarea id="mytextarea" name="content"></textarea>
                                    </td>
                                </tr>
                                <tr>

                                    <td  align="center" colspan="2">

                                        <button type="button" class="btn btn-secondary" onclick=" window.history.back();">
                                            Cancel
                                        </button>
                                        &nbsp;
                                        <button type="submit" class="btn btn-secondary">
                                            Save
                                        </button>
                                    </td>

                                </tr>


                                </tbody>
                            </form>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<script>
    tinymce.init({
        selector: '#mytextarea',
        height: 700,
        theme: 'modern',
        plugins: [
            'fontawesome noneditable',
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons fontawesome',
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ],
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css',
            'https://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'
        ]
    });
</script>

