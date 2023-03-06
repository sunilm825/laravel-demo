<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2
           @11.0.16/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap
          @5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-
         gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.alert').fadeOut('fast');
        }, 3000);
    });
    // <-- time in milliseconds
</script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    $(document).ready(function() {
        $('#form').validate({ // initialize the plugin
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    digits: true

                },
                minlength: {
                    required: true,
                    minlength: 5

                },
                password: {
                    required: true

                }
            },
            messages: {

                name: {
                    required: "Please enter your name",
                },

                email: {
                    required: "Please enter last name",
                },

                phone: {
                    required: "Please enter phone number",
                    digits: "Please enter valid phone number",
                },

                password: {
                  required: "Please enter password",
                },
            },
        });
    });
</script>
</body>

</html>
