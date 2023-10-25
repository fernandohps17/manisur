<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/public/js/editor_en.js"></script>
<script>
    $(document).ready(function() {
        $("#txtEditor_en").Editor_en();

        $('#txtEditor_en').Editor_en('setText_en', [`<?php echo $content ?>`]);

        $('#btn-enviar').click(function(e) {
            e.preventDefault();
            $('#txtEditor_en').text($('#txtEditor_en').Editor_en('getText_en'));
            $('#frm-test').submit();
        });
    });
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="/public/css/editor.css" type="text/css" rel="stylesheet" />