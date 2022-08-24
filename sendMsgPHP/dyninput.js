$(document).ready(function () {
    var max_fields = 10;
    var add_input_button = $('.add_input_button');
    var field_wrapper = $('.field_wrapper');
    var new_field_html = '<div class="form-row"> <div class="form-group col-6"> <input placeholder="Text Button" type="text" class="custom-input-field" name="text_btn" /> </div> <div class="form-group col-6"> <input placeholder="Url Button" type="text" class="custom-input-field" name="url_btn" /> <a href="javascript:void(0);" class="remove_input_button" title="Remove Field"><img src="remove-icon.png" /></a> </div> </div>';
    var input_count = 1;
    // Add button dynamically
    $(add_input_button).click(function () {
        if (input_count < max_fields) {
            input_count++;
            $(field_wrapper).append(new_field_html);
        }
    });
    // Remove dynamically added button
    $(field_wrapper).on('click', '.remove_input_button', function (e) {
        e.preventDefault();
        $(this).parent().parent('div').remove();
        input_count--;
    });
});