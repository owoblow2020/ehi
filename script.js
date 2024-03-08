$(document).ready(function(){
    $('#sendButton').on('click', function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        
        // Check if all fields are filled
        if (name !== '' && email !== '' && phone !== '') {
            $.ajax({
                type: 'POST',
                url: 'send_email.php',
                data: {
                    name: name,
                    email: email,
                    phone: phone
                },
                success: function(response){
                    // Handle success, like showing a success message or redirecting
                    console.log(response); // Log the response for debugging
                },
                error: function(xhr, status, error){
                    // Handle error, like showing an error message
                    console.error(xhr.responseText); // Log the error for debugging
                }
            });
        }
    });
});
