<form action="" method="post" id="contact-us-form">
    <div class="contact-form-input">
        <label for="">Name</label>
        <input type="text" name="contact_name" id="contact-name" value="">
    </div>
    <br>
    <div class="contact-form-input">
        <label for="">Email</label>
        <input type="email" name="contact_email" id="contact-email" value="">
    </div>
    <br>
    <div class="contact-form-input">
        <label for="">Message</label>
        <textarea name="contact_message" rows="4" id="contact-message"></textarea>
    </div>
    <br>
    <div class="contact-form-input">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>

<script>
    var ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';

    jQuery(document).ready(function($) {
        var form = $("#contact-us-form");
        form.submit(function(e) {
            e.preventDefault();
            var xdata = {
                action: 'contact_us_save',
                contact_name: $("#contact-name").val(),
                contact_email: $("#contact-email").val(),
                contact_message: $("#contact-message").val()
            };

            $.ajax({
                url: ajaxUrl,
                type: 'post',
                dataType: 'json',
                data: xdata,
                success: function(response) {

                },
                error: function(response) {

                }
            });
        });
    })
</script>