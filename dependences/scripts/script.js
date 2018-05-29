document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'left',
      hoverEnabled: false
    });
  });

   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });

  var index = 0;

    var listaimg = ["/ibrinezcoaching/media/img/family4.jpg", "/ibrinezcoaching/media/img/family2.jpg","/ibrinezcoaching/media/img/family3.jpg","/ibrinezcoaching/media/img/family.jpg"];

$(function() {
  
    setInterval(changeImage, 7000);
  
});

function changeImage() {
  
 
   $('body').css("background-image", 'url(' + listaimg[index] + ')');
                  
   index++;
                  
   if(index == 4)
      index = 0;
    
    
}

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.timepicker').timepicker();
  });
  $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    format: "HH:ii:SS",
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){}, //Function for after opening timepicker

    

  });