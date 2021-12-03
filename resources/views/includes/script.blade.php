<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
 function add_Article() {
    
    var _token = $("input[name='_token']").val();
    var person_name = $("input[name='person_name']").val();
    var email = $("input[name='email']").val();
    var contacts = $("input[name='contacts']").val();
    var short_description = $("textarea[name='short_description']").val();
    var card_id = $("input[name='card_id']").val();
    var single_address = $("textarea[name='single_address']").val();
    $.ajax({
        url: "{{ route('card.store') }}",
        type:'POST',
        data: {_token:_token, person_name:person_name, email:email, contacts:contacts, short_description:short_description,'single_address':single_address,'card_id':card_id},
        success: function(data)
        {
            window.location = "{{ route('card.list') }}";
        },error: function(err, err_status){ 
                         
                  if (err.responseJSON.errors) {
                      $.each(err.responseJSON.errors, function(i, data) {
                        $('.error').text('');
                              
                              $('.'+i).text(data);
                      });
                  }else{
                   
                  }
                 
              }
    });
 }

</script>