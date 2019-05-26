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
              height: 300,
              menubar: false,
              plugins: [
                          'advlist autolink lists link image charmap print preview anchor textcolor',
                          'searchreplace visualblocks code fullscreen',
                          'insertdatetime media table paste code help wordcount'
                        ],
              toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
              content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tiny.cloud/css/codepen.min.css'
              ]
          });


    </script>
</head>
<body>
    <div id="wrapper">
