jQuery(function(){
    reg_users();
})

function reg_users()
{
    $(document).on('click', '#register', function(event){
        $('#reg_password').removeClass('inpt-border');
        $('#reg_email').removeClass('inpt-border');
        event.preventDefault();
        let email=$('#reg_email').val();
        let password=$('#reg_password').val();
        let register=$('#register').val();
            $.ajax({
                url:'users',
                method:'POST',
                data:
                {
                    email:email,
                    password:password,
                    register:register
                },
                dataType:'JSON',
                success:function(data)
                {
                    switch(data.status)
                    {
                        case 'empty':
                            $('#reg-message').html(data.error);
                            $('#reg_password').addClass('inpt-border');
                            $('#reg_email').addClass('inpt-border');
                        break;
                        case 'eml':
                            $('#reg-message').html(data.error);
                            $('#reg_email').addClass('inpt-border');
                        break;
                        case 'pwd':
                            $('#reg-message').html(data.error);
                            $('#reg_password').addClass('inpt-border');
                        break;
                        case 'success':
                            alert('You\'re registered successfully')
                            window.location.href='/';
                        break;
                        default:
                            alert('We are having some issues');
                            break;

                    }
                    
                }
            });
            return false;

    })
    $(document).on('click', '#cancel', function(){
        $('form').trigger('reset');
        $('#reg-message').html('');
        $('#reg_password').removeClass('inpt-border');
        $('#reg_email').removeClass('inpt-border');
    })
}