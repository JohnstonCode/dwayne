(function(){
    
    $('#insane-vote').on('click', function(){
       
        $.post("vote.php",
        {
            vote: "insane"
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