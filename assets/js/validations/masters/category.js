$(document).ready( function () {
    $('#category-table').DataTable();
} );

function delCat(id)
{
	$('#del_cat_id').val(id);
}


$(function() {

	$('#cat-form').validate({

		rules:{
				cate_name:{
					required:true,
					alpha: true,
					// remote: {
			  //         url: base_url + "check-state",
			  //         type: "GET",
			  //         data: {
			  //           state: function() {
			  //             return $("#state").val();
			  //           },
			  //           ms_id: function() {
			  //             return $("#ms_id").val();
			  //           }
			  //         }
     //    			}
				}
				// fname:{

				// },
				// lname:{

				// },

		},
		messages:{
			cate_name:{
					required:"Enter a category.",
					alpha: "The category field only contain alphabetical characters."
				}
		},
		submitHandler:function(form)
		{
			form.submit();
		}

	});


	/* Jquery Validation methods start */

  $.validator.addMethod("alpha", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
  });

  /* Jquery Validation methods start */

});