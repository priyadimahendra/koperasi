<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url() ?>assets/admin/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url() ?>assets/admin/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->

        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url() ?>assets/admin/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url() ?>assets/admin/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <!-- TINYMCE-->
    <script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
    <!-- END TINYMCE-->

    <script>
        tinymce.init({
          selector: '.tinymce',
             plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help',
             toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
             image_advtab: true,
             content_css: [
               '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
               '//www.tiny.cloud/css/codepen.min.css'
             ],
             link_list: [
               { title: 'My page 1', value: 'http://www.tinymce.com' },
               { title: 'My page 2', value: 'http://www.moxiecode.com' }
             ],
             image_list: [
               { title: 'My page 1', value: 'http://www.tinymce.com' },
               { title: 'My page 2', value: 'http://www.moxiecode.com' }
             ],
             image_class_list: [
               { title: 'None', value: '' },
               { title: 'Some class', value: 'class-name' }
             ],
             importcss_append: true,
             height: 400,
             file_picker_callback: function (callback, value, meta) {
               /* Provide file and text for the link dialog */
               if (meta.filetype === 'file') {
                 callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
               }

               /* Provide image and alt text for the image dialog */
               if (meta.filetype === 'image') {
                 callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
               }

               /* Provide alternative source and posted for the media dialog */
               if (meta.filetype === 'media') {
                 callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
               }
             },
             templates: [
               { title: 'Some title 1', description: 'Some desc 1', content: 'My content' },
               { title: 'Some title 2', description: 'Some desc 2', content: '<div class="mceTmpl"><span class="cdate">cdate</span><span class="mdate">mdate</span>My content2</div>' }
             ],
             template_cdate_format: '[CDATE: %m/%d/%Y : %H:%M:%S]',
             template_mdate_format: '[MDATE: %m/%d/%Y : %H:%M:%S]',
             image_caption: true,

             spellchecker_dialog: true,
             spellchecker_whitelist: ['Ephox', 'Moxiecode']
        });
    </script>
</head>
<body>
    <div id="wrapper">
