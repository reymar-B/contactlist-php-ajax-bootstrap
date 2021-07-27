jQuery(function(){
    login();
})


function login()
{
    $(document).on('click', '#login', function(event){
        event.preventDefault();
        
        let email=$('#email').val();
        let password=$('#password').val();
        let login=$('#login').val();
            $.ajax({
                url:'login',
                method:'POST',
                data:
                {
                    email:email,
                    password:password,
                    login:login
                },
                dataType:'JSON',
                success:function(data)
                {
                    if(data.success=='success')
                    {
                        window.location.href = '/';
                    }else{
                        $('#login-message').html(data.error);
                    }
                }
                
            });
            
            return false;
    
    })
    
}