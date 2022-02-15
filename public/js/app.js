
$(document).on('click', '[type="button"]', function(){
    let required = $('[required]');
    if($(this).data('skip')){
        $('#skip_status').val('1');
    }
    let errors = 0;
    $(required).each(function(){
        let val = $(this).val();
        let text = $(this).data('required');
        if(val == ''){
            $(this).css('border', '1px solid red');
            $(this).closest('error').find('.error').text(text);
            errors++;
        }else{
            $(this).css('border', '');
            $(this).closest('error').find('.error').text('');
        }

        if($(this).attr('name') == 'email'){
            if(!validateEmail(val)){
                let text = 'Invalid Email address!';
                $(this).closest('error').find('.error').text(text);
                $(this).css('border', '1px solid red');
                errors++;
            }else{
                $(this).css('border', '');
                $(this).closest('error').find('.error').text('');
            }
        } 
    });
    if(errors == 0){
        runAjax();
    }
});

function runAjax(){
    let form = $('form');
    let data = form.serialize();
    let url = $('form').attr('action');
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function(){
            $('[type="button"]').attr('disabled', true);
        },
        success: function(res){
            console.log(res);
            if(res.href){
                window.location.href = res.href;
            }
            if(res.question){
                const question = res.question;
                const answers = res.answers; 
                let html = `<div class="col-6">
                                <h3 class="text-center">Question#${question.id} (${question.bankName})</h3>
                                <p>${question.question}</p>
                                <ul class="list-group">`;
                                answers.forEach((ans)=>{
                                    html += '<li class="list-group-item"><input type="radio" name="answer_id" id="answer_'+ans.id+'" value="'+ans.id+'"> <label for="answer_'+ans.id+'">'+ans.answer+'</label></li>';
                                })
                                html += `</ul>
                                <input type="hidden" value="${question.id}" name="question_id">
                                <input type="hidden" id="skip_status" name="skip" value="">
                                <div class="row my-1">
                                    <div class="col-6">
                                        <button type="button" data-skip="true" class="btn btn-primary" id="skip">Skip</button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="button" class="btn btn-success" id="next" disabled>Next</button>
                                    </div>
                                </div>
                            </div>`;
                            $('.question_container').html(html);
            }
        }
    })
}

function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}