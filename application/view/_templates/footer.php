    <!-- jQuery, loaded in the recommended protocol-less way -->
    <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "<?php echo URL; ?>";
    </script>
    <script src="<?php echo URL; ?>/<?php echo $site->sitetheme; ?>/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL; ?>/<?php echo $site->sitetheme; ?>/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo URL; ?>/<?php echo $site->sitetheme; ?>/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo URL; ?>/dist/js/sb-admin-2.js"></script>
    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>/js/application.js"></script>
</body>
</html>
