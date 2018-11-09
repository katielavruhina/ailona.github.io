<?php
//Set no caching
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>




window.addEvent('domready', function() {

    var status = {
        'true': 'open',
        'false': 'close'
    };

    // -- vertical

    var myVerticalSlide = new Fx.Slide('vertical_slide');
    
    // -- Set slider to closed
    myVerticalSlide.slideOut();
	document.getElementById('xxx').style.display = 'none';
    document.getElementById('yyy').style.display = 'none';
    document.getElementById('zzz').style.display = 'none';
       
       
  $('v_slidein').addEvent('click', function(event){
    event.stop();
    myVerticalSlide.slideIn();
     document.getElementById('xxx').style.display = 'inline';
     document.getElementById('yyy').style.display = 'inline';
      document.getElementById('zzz').style.display = 'inline';
  });


  $('v_slideout').addEvent('click', function(event){
    event.stop();
    myVerticalSlide.slideOut();
   document.getElementById('xxx').style.display = 'none';
    document.getElementById('yyy').style.display = 'none'; 
    document.getElementById('zzz').style.display = 'none';
  });




    myVerticalSlide.addEvent('complete', function() {
          
        $('vertical_status').set('text', status[myVerticalSlide.open]);
 
    });
    
    

       
    
 });
 
 

	 
   
