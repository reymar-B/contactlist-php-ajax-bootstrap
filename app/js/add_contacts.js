jQuery(function(){
    insert();
    show_record();
    edit();
    update();
    delete_contact();
})

function insert()
{
    $(document).on('click', '#addContacts', function(event){
        event.preventDefault();
        let name=$('#name').val();
        let email=$('#email').val();
        let phone=$('#phone').val();
        let addContacts=$('#addContacts').val();
            $.ajax({
                url:'contacts',
                method:'POST',
                data:
                {
                    name:name,
                    email:email,
                    phone:phone,
                    addContacts:addContacts
                },
                success:function(data)
                {
                $('#error-message').html(data);
                $('form').trigger('reset');
                show_record();
                // var url = '/';         
                // $('#show-data').load(url + ' #show-data'); 
                }
            });
            return false;

    })
    $(document).on('click', '#addContacts-close', function(){
        $('form').trigger('reset');
        $('#error-message').html('');
    })
}


function show_record()
{
    let show='show';
    $.ajax({
        url:'contacts',
        method:'POST',
        data:{show:show},
        success: function(data)
        {
            data = JSON.parse(data);
            if(data.status=='success')
            {
                $('#show-tbl').html(data.data);
            }
        }
    })
    return false;

}

function edit()
{
    $(document).on('click', '#edit', function()
    {
        let id = $(this).attr('contacts-id');
        
        $.ajax({
            url:'contacts',
            method:'POST',
            data:{ contactId:id },
            dataType: 'JSON',
            success: function(data)
            {
                $('#up-id').val(data[0]);
                $('#up-name').val(data[1]);
                $('#up-email').val(data[2]);
                $('#up-phone').val(data[3]);
            }
        })
        return false;
    })
}

function update()
{
    $(document).on('click', '#upContacts', function(event){
        
        response = confirm('are you sure you want to update this record?');
        if(response == true)
        {
            event.preventDefault();
            let id =$('#up-id').val();
            let name=$('#up-name').val();
            let email=$('#up-email').val();
            let phone=$('#up-phone').val();
            let upContacts=$('#upContacts').val();

            $.ajax({
                url:'contacts',
                method:'POST',
                data:
                {
                    upid:id,
                    upName:name,
                    upEmail:email,
                    upPhone:phone,
                    upContacts:upContacts
                },
                success:function(data)
                {
                    $('#up-err-message').html(data);
                    show_record();
                }
            })

        }
        
            return false;
        
    })
    $(document).on('click', '#btn-exit', function(){
        $('#up-err-message').html('');
    })
   
}

function delete_contact()
{
    $(document).on('click', '#del-contacts', function(event)
    {
        var response = confirm('This action is irreversible. Do you still want to delete this record?');
        if(response == true)
        {
            event.preventDefault();
            let id =$('#up-id').val();
            let delContacts=$('#del-contacts').val();
            $.ajax
            ({
                url:'contacts',
                method:'POST',
                data:
                {
                    delid:id,
                    delContacts:delContacts,
                },
                success:function()
                {
                    show_record();
                    $('form').trigger('reset');
                }
    
            })
        }
    })
    
}