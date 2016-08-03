<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($query as $row) { ?>
                    <div class="content table-responsive table-full-width">
                        <button type="button" class="btn btn-primary"
                                onclick="window.location.href='/wiki/edit/<?php echo $row->id; ?>'">Edit
                        </button>
                    </div>
                    <br>
                    <div class="card">
                        <div class="content table-responsive table-full-width">
                            <h2 class="editable"><?php echo $row->title; ?></h2>
                            <div class="editable">
                                <?php echo $row->content; ?>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>


        </div>
    </div>
</div>


<script>

    tinymce.init({
        selector: 'h2.editable',
        inline: true,
        toolbar: 'undo redo',
        menubar: false,
        readonly: true
    });

    tinymce.init({
        selector: 'div.editable',
        inline: true,
        readonly: true,
        plugins: [
            'fontawesome noneditable',
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css',
        'https://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'
    ]
    });
</script>

