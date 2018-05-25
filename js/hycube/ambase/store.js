Event.observe(window, 'message', function(e){
    if (e.data.action == 'setHeight')
    {
        var height = e.data.height;
        $('hycube_store').setStyle({height: height+'px'});
    }
});
