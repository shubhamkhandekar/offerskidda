<script type="text/javascript">


$(".numericOnly").keypress(function (e) {
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
});

function Numeric(event) {     // for numeric value function
      if ((event.keyCode < 48 || event.keyCode > 57) && event.keyCode != 8) {
          event.keyCode = 0;
          return false;
      }
    }

$(document).ready(function(){
    $(".fltr-tog").click(function(){
        $(".filter-bdy").toggle();
    });
});
     // Menubar cross close
// function myFunction(x) {
//    x.classList.toggle("change");
// }
    //Menubar cross close end
 
$(document).ready(function(){
    $(".search-btn").click(function(){
        $(".search-dv").toggle("slow");
    });
});
 
  $(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker("getDate");
});

    $(function () {
  $("#datepicker_date").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker("getDate");
});
 
 
  $(function () {
  $("#datepicker1").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker("getDate");
});
 
  $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
           
                 });
             });
       

  // $(document).ready(function() {
         
  //         $('#example').DataTable({
  //         "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
  //         });
  //         });
  
          // $('.popover-Payment').popover({
          //   trigger: 'focus'
          // });
          // test

          
//           $('body').popover({
//     selector: '[data-toggle="popover"]'
// });

// $('body').on('click',  function (e) {
//     $('[data-toggle="popover"]').each(function () {
//         if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover-Password').has(e.target).length === 0) {

//             $(this).popover('destroy');
//         }
//     });
// });


   
</script>











