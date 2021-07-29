jQuery(function(){
    reg_users();
    show_profile();
    create();
})

function reg_users()
{
    $(document).on('click', '#register', function(event){
        $('#reg_password').removeClass('inpt-border');
        $('#reg_email').removeClass('inpt-border');
        event.preventDefault();
        let f_name=$('#f_name').val();
        let l_name=$('#l_name').val();
        let address=$('#address').val();
        let phone=$('#phone').val();
        let email=$('#reg_email').val();
        let password=$('#reg_password').val();
        let register=$('#register').val();
            $.ajax({
                url:'users',
                method:'POST',
                data:
                {
                    firstName:f_name,
                    lastName:l_name,
                    address:address,
                    phone:phone,
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
                            $('#f_name').addClass('inpt-border');
                            $('#l_name').addClass('inpt-border');
                            $('#address').addClass('inpt-border');
                            $('#phone').addClass('inpt-border');
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
                        case 'phn':
                            $('#reg-message').html(data.error);
                            $('#reg_email').addClass('inpt-border');
                        break;
                        default:
                            alert('We are having some issues');
                            break;

                    }
                    console.log(data);
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

function show_profile()
{
    $(document).on('click', '#p_profile', function()
    {
        show = 'show';
        $.ajax({
            url:'users',
            method:'POST',
            data:{ 
                show:show
            },
            dataType: 'JSON',
            success: function(data)
            {   
                $('#p-id').val(data[0]);
                $('#p-fname').val(data[1]);
                $('#p-lname').val(data[2]);
                $('#p-address').val(data[3]);
                $('#p-phone').val(data[4]);
            }
        })
        
        return false;
    })
}

function create()
{
    let show='show';
    $.ajax({
        url:'users',
        method:'POST',
        data:{
            show:show
        },
        success: function(data)
        {
            data = JSON.parse(data);
            if(data)
            {
                $('#u_name').text(data[1]);
            }
        }
    })
    return false;
}

