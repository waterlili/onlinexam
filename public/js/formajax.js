// $(function() {

//     $.ajaxSetup({
//       headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       }
// });
$(function(){
$('#test_c').on('submit',function(e){
     $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
         e.preventDefault(e);
     $('#test-errors-question').html("");
        // $("#addQt").removeClass("has-error");
        var form = $("#test_c");
        $.ajax({
        url:form.attr("action"),
        type:form.attr("method"),
        data:form.serialize(),
        dataType: 'json',
        success: function(data){
            
                
            // $('#success').html("<div class='alert alert-success'>");
            // $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            //     .append("</button>");
            // $('#success > .alert-success')
            //     .append("<strong>Your info's has been updated. </strong>");
            // $('#success > .alert-success')
            //     .append('</div>').delay(3000).fadeOut("slow");
            // //clear all fields
            // $('#test_add').trigger("reset");
            if(data.score)
            {   
               
                // $("#loginModal").dialog("close");
                // jQuery("#loginModal").dialog({
                //     autoOpen: false,
                //     modal: true,
                //     open: function(){

                //         jQuery('.ui-widget-overlay').bind('click',function(){
                //             jQuery('#loginModal').dialog('close');

                //         })
                //     }
                // });
                $('#loginModal').modal('toggle');
                swal({
                  title: "پاسخ :)",
                  text: data.score,
                  confirmButtonText: 'تایید',
                  imageUrl: "imgs/bulb.png",
                  imageSize: '124x135'
              
                });
                //clear all fields
                $('#test_c').trigger("reset");
                           
            }
           
            
        },
        error: function(data){
           console.log(data.responseText);              
           var obj = jQuery.parseJSON( data.responseText );
            var i=1;
            // alert(Object.keys(obj));
            var a=Object.keys(obj);
            a.forEach(function(element) {
                 var r = /\d+/;
                 var num = element.match(r);
                 $("#addQt"+num).addClass("has-error");
                // alert(element);
            });

           

         swal({
              title: "خطا!",
              text: "لطفا به همه ی سوالات پاسخ دهید!",
              type: "error",
              confirmButtonText: "تایید"
            });

              

        }
         })
});
       //with this section you disapear errors by clicking on it
       $(document).ready(function(){
          // for(var k = 1; k < 20; k++) {
            var k=1;
            $('div.form-group').click(function() { 
                var id = $(this).attr('id');
                var r = /\d+/;
                var tip = id.match(r);
                if ($("#addQt"+tip).hasClass("has-error")) {
                
                   $("#addQt"+tip).removeClass("has-error");
                }



            });
          // }
        });
       //end of error story
     
    

    $('#extra_info').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);
        var form = $("#extra_info");
        $.ajax({
        url:form.attr("action"),
        type:form.attr("method"),
        data:form.serialize(),
        cache: false,
        dataType: 'json',
        success: function(data){
            $('#success').html("<div class='alert alert-success'>");
            $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                .append("</button>");
            $('#success > .alert-success')
                .append("<strong>Your info's has been updated. </strong>");
            $('#success > .alert-success')
                .append('</div>').delay(3000).fadeOut("slow");
            
        },
        error: function(data){
            console.log(data.responseText);
                    var obj = jQuery.parseJSON( data.responseText );
                   if(obj.name){
                        $("#upName").addClass("has-error");
                        $( '#update-errors-name' ).html( obj.name );
                    }
                    if(obj.lastname){
                        $("#upLname").addClass("has-error");
                        $( '#update-errors-lname' ).html( obj.lastname );
                    }
                    if(obj.birth_date){
                        $("#upDate").addClass("has-error");
                        $( '#update-errors-date' ).html( obj.birth_date );
                    }
                    if(obj.phone){
                        $("#upPhone").addClass("has-error");
                        $( '#update-errors-phone' ).html( obj.phone );
                    }
                    if(obj.talents){
                        $("#upTalents").addClass("has-error");
                        $( '#update-errors-talents' ).html( obj.talents );
                    }
                    else{
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("There is some error.Please try again!");
                    $('#success > .alert-danger').append('</div>').delay(5000).fadeOut("slow");
                }

        }
    })
    });
});

 


$('#test_add').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);
        $('#add-errors-question').html("");
        $("#addQt").removeClass("has-error");
        var form = $("#test_add");
        $.ajax({
        url:form.attr("action"),
        type:form.attr("method"),
        data:form.serialize(),
        dataType: 'json',
        success: function(data){
                
            $('#success').html("<div class='alert alert-success'>");
            $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                .append("</button>");
            $('#success > .alert-success')
                .append("<strong>Your info's has been updated. </strong>");
            $('#success > .alert-success')
                .append('</div>').delay(3000).fadeOut("slow");
            //clear all fields
            $('#test_add').trigger("reset");
            
        },
        error: function(data){
            console.log(data.responseText);
                    var obj = jQuery.parseJSON( data.responseText );
                   if(obj.question){
                        $("#addQt").addClass("has-error");
                        $( '#add-errors-question' ).html( obj.question );
                    }
                    else{
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("There is some error.Please try again!");
                    $('#success > .alert-danger').append('</div>').delay(5000).fadeOut("slow");
                }

        }
    })

    });
