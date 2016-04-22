<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script type="text/javascript">
$("#loginValidate").validate({
        rules: {
            email: {
                required: true,
                email:true
            },
            password: {
        				required: true,
        				minlength: 6

      			},
          },
        //For custom messages
            messages: {
                email:{
                    required: "Please enter your email address",
                },
                password:{
                    required: "Please enter your password",
                    minlength: "Enter at least 6 characters"
                },
          },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
</script>
<script>
$('.modal-trigger').leanModal({
    dismissible: true, // Modal can be dismissed by clicking outside of the modal
    opacity: .5, // Opacity of modal background
    in_duration: 300, // Transition in duration
    out_duration: 200, // Transition out duration
  }
);
</script>
