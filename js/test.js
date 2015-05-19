var test_answers = {
    1: {
        answers: ['12334', '2434541', '36714', '1323430'],
        right_answer: 2 // индексация с 0
    },
}

function test_render(){
    $('.answers').each(function(){
        var $this = $(this);
        var id = $this.data('id');
        
        var html = '<ol>';
        
            for(var key in test_answers[id].answers)
                html +='<li>'+
                            '<label>'+
                                '<input type="radio" name="test' + id + '" id="test' + id + '" value="' + key + '"> ' +
                                    test_answers[id].answers[key] +
                            '</label>' +
                        '</li>';
            
        html += '</ol>';
        
        $this.html(html);
    });
    test_handlers();
}

function test_handlers(){
    $('.answers input').click(function(){
        var $this = $(this);
        var $answers = $this.closest('.answers');
        var task_id = $answers.data('id');
        var right_answer = test_answers[task_id].right_answer;
        var task = $answers.closest('.task');
        
        task.removeClass('panel-default').removeClass('panel-success').removeClass('panel-danger');
        
        if (right_answer == $this.val()) 
            task.addClass('panel-success');
        else
            task.addClass('panel-danger');
    })
}

function test_init() {
    test_render();
}