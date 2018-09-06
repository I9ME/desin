    //AJAX function to store data when field is edited
jQuery(document).ready( function($) {

$('#hm_button_savefield').submit(function(event) {

var input = $(this);
var formElm = $(input).parents('form.hm_edit_field_form');
var tempHtml = formElm.html();
formElm.html('');

var nonce = jQuery(this).attr("data-nonce");
var postData = getPostData('#hm_edit_field_form *[name]');

jQuery.ajax({
type : "post",
dataType : "json",
url : HM_Ajax.ajaxurl,
data : postData,
success: function(response) {

if(response.type == "success") {
document.getElementById("hm_editfield-" + hm_field).innerHTML = response.field_value
}
else {
//ERROR
}

}

}); //Close jQuery.ajax function

}); //Close input click function

//Get all POSTable data from form.
function getPostData(selector){
var postData = {};
$.each($(selector), function(index,el){
el = $(el);
postData[el.attr('name')] = el.attr('value');
});
return postData
}

}) //Close jQuery ready function