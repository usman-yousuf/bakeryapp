/* $(function(event) {
$('#frm_login-d').validate({
ignore: ".ignore",
rules: {
    email: {
        required: true,
        email: true,
        minlength: 5,
    },
    password: {
        required: true,
        minlength: 8
    },
},
messages: {
    email: {
        required: "Email is Required",
        minlength: "Email Should have atleast 5 characters",
        email: "Email Format is not valid"
    },
    password: {
        required: "Password is Required.",
        minlength: "Password Should have atleast 8 characters",
    },
},
errorPlacement: function(error, element) {
    $('#' + error.attr('id')).remove();
    error.insertAfter(element);
    $('#' + error.attr('id')).replaceWith('<span id="' + error.attr('id') + '" class="' + error.attr('class') + '" for="' + error.attr('for') + '">' + error.text() + '</span>');
},
success: function(label, element) {
    // console.log(label, element);
    $(element).removeClass('error');
    $(element).parent().find('span.error').remove();
},
submitHandler: function(form) {
    Swal.fire({
        title: 'Success',
        text: 'Logged in Successfully',
        icon: 'success',
        showConfirmButton: false,
        timer: 2000
    }).then((result) => {
        // do something
    });
    return false;
}
});
});
*/
// subscription active class add on cards

// Get the container element
// var Container = document.getElementById("subscription_plan-d");

// // Get all nav items with class="nav_link_active-d" inside the container

// var items = Container.getElementsByClassName("subscription1_card-s subscription2_card-s subscription3_card-s ");

// //loop for all nav link items to active them on click
// for (var i = 0; i < items.length; i++) {
//     items[i].addEventListener("click", function() {
//         var current = document.getElementsByClassName("active");
//         current[0].className = current[0].className.replace(" active", "");
//         this.classlist.add('active');
//     });
// }

$(function(event) {
    $('.sub_cards-d').on('click', '.sub_plans-d', function(e) {
        //console.log(this);
        let elm = $(this);
        let planName = $(this).attr('data-plan');
        $('.sub_plans-d').removeClass('active');
        $(elm).addClass('active');

        $('.main_work_container-d').find('.plan_container-d').hide();
        let targetElm = '.' + planName;
        $('.main_work_container-d').find(targetElm).show();


    });

    if ($(".tagged_select2").length > 0) {
        $(".tagged_select2").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
    }
    $('#ddl_brand').select2({
        placeholder: 'Brand type',
        tags: true,
        tokenSeparators: [',']
    });
    $('#ddl_product').select2({
        placeholder: 'Product type',
        tags: true,
        tokenSeparators: [',']
    });
})