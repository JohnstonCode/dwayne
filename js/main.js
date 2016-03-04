(function(){
    
    $('.vote-button').on('click', function(){
        
        var vote = $(this).attr('value');
       
        $.post("vote.php",
        {
            vote: vote
        },
        function(data, status){
            if(data == 'Vote added')
            {
                $('#insane-vote').remove();
                $('#sane-vote').replaceWith('<span>Thanks for voting.</span>');
            }
        });
        
    });
    
    
})();