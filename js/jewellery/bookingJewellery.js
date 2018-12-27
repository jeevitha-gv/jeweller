   function dataforform()
   {
  var phone=$('#phonenumber').val();
    $('#formphonenumber').val(phone);
   }
  function dataforbill()
   {
    var bill=$('#bill_number').val();
    $('#formbillnumber').val(bill);
   }


   function getmonthlyinterest()
   {
    var rateofinterest=$('#rateofinterest').val();
    var amontadvance= $('#amontadvance').val();
    var monthlyinterest=amontadvance/100;
    $('#monthlyinterest').val(monthlyinterest*rateofinterest);
   }


   function createdispurse()
   {

   	var modelDetails={
   		'name':$('#name').val(),
 'start_date':$('#date').val(),
 'phonenumber':$('#phonenumber').val(),
 'bill_number':$('#bill_number').val(),
 'driving_license':$('#driving_license').val(),
 'dob':$('#dob').val(),
 'address':$('#address').val(),
 'Weight':$('#Weight').val(),
 'carat':$('#carat').val(),
 'rateofinterest':$('#rateofinterest').val(),
 'marketvalue':$('#marketvalue').val(),
 'assessedvalue':$('#assessedvalue').val(),
 'amontadvance':$('#amontadvance').val(),
 'monthlyinterest':$('#monthlyinterest').val(),
 'signature':$('#signature').val(),
 'mail':$('#mail').val(),
 'action':'create'
   	}

    $.ajax({
        type: "POST",
        url: "/Jeweller/php/jewellery/managedispurse.php",
        data: modelDetails,
        success:insertdata
            });    
}



function interest()
{
	   	var modelDetails={
	   	'phonenumber':$('#phonenumber').val(),
 			'bill_number':$('#billdata').val(),
      'start_date':$('#renewal').val(),
      'end_date':$('#end_date').val(),
      'totalinterest':$('#totalinterest').val(),
 			'action':'paid'
}
   $.ajax({
        type: "POST",
        url: "/Jeweller/php/jewellery/managedispurse.php",
        data: modelDetails
            });
   window.print();
}

function renewalinterest()
{
	     var modelDetails={
      'phonenumber':$('#phonenumber').val(),
      'bill_number':$('#billdata').val(),
      'start_date':$('#renewal').val(),
      'end_date':$('#end_date').val(),
      'totalinterest':$('#totalinterest').val(),
 			'action':'renewal'
}
   $.ajax({
        type: "POST",
        url: "/Jeweller/php/jewellery/managedispurse.php",
        data: modelDetails
            });
window.print();
}




function closethepawan()
{
       var modelDetails={
      'phonenumber':$('#phonenumber').val(),
      'bill_number':$('#billdata').val(),
      'start_date':$('#renewal').val(),
      'end_date':$('#end_date').val(),
      'totalinterest':$('#totalinterest').val(),
      'action':'close'
}
   $.ajax({
        type: "POST",
        url: "/Jeweller/php/jewellery/managedispurse.php",
        data: modelDetails
            });
window.print();
}



  function getbilldata(){
    var modalDetails={'phonenumber':$('#phonenumber').val()};
      $.ajax({
        type: "POST",
        url: "/Jeweller/view/common/getbill.php",
        data: modalDetails,
        success:function(data){
            $('#controlDrop').html(data);
        
        }
    });
}

 function getrenewalbillnumber(){
    var modalDetails={'phonenumber':$('#phonenumber').val()};
      $.ajax({
        type: "POST",
        url: "/Jeweller/view/common/getrenewalbill.php",
        data: modalDetails,
        success:function(data){
            $('#controlDrop').html(data);
        
        }
    });
}


function getinterestamounttorenewal()
{
   var modalDetails={
      'phonenumber':$('#phonenumber').val(),
      'billdata':$('#billdata').val()
    };
      $.ajax({
        type: "POST",
        url: "/Jeweller/view/common/renewalamount.php",
        data: modalDetails,
        success:function(data){
            $('#getinterest').html(data);
        
        }
    });

 $.ajax({
        type: "POST",
        url: "/Jeweller/view/common/getdateforrenewwal.php",
        data: modalDetails,
        success:function(data){
            $('#getdateforrenewwal').html(data);
        
        }
    });
  $.ajax({
        type: "POST",
        url: "/Jeweller/view/common/getendDateforrenewal.php",
        data: modalDetails,
        success:function(data){
            $('#getendDateforrenewal').html(data);
        
        }
    });
}




function getinterestamount(){
    var modalDetails={
      'phonenumber':$('#phonenumber').val(),
      'billdata':$('#billdata').val()
    };
      $.ajax({
        type: "POST",
        url: "/Jeweller/view/common/getinterestAmount.php",
        data: modalDetails,
        success:function(data){
            $('#getinterest').html(data);
        
        }
    });

 $.ajax({
        type: "POST",
        url: "/Jeweller/view/common/getdateforrenewwal.php",
        data: modalDetails,
        success:function(data){
            $('#getdateforrenewwal').html(data);
        
        }
    });

}





 $(document).ready(function(){

      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><select  name="item[]" class="form-control name_list">for(j=0;j<4;j++){<option value="Bangle">Bangle</option>}<option value="Ring">Ring</option><option value="chain">chain</option><option value="Bracelet">Bracelet</option><option value="Watch">Watch</option><option value="ear ring">ear ring</option><option value="Anklets">Anklets</option></select></td><td><input type="text" name="quantity[]" placeholder="Enter your quantity" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
       });
             
             function insertdata()
             {     
           $.ajax({  
                url:"/Jeweller/php/purchase_order/getPawnleadgerdata.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });
           window.print(); 
           } 

function sendmailnotice()
{
 var maildata={
  'name':$('#name').val(),
'mail':$('#mail').val(),
      'billdata':$('#bill_number').val()
 } 
  $.ajax({  
                url:"/Jeweller/php_mailer/index.php",  
                method:"POST",  
                data:maildata 
           });
  window.location="/Jeweller/view/Notice/notice.php";

}

       function totalinterestdata()
       {


        // Here are the two dates to compare
var date1 = $('#renewal').val();
var date2 = $('#end_date').val();

// First we split the values to arrays date1[0] is the year, [1] the month and [2] the day
date1 = date1.split('-');
date2 = date2.split('-');

// Now we convert the array to a Date object, which has several helpful methods
date1 = new Date(date1[0], date1[1], date1[2]);
date2 = new Date(date2[0], date2[1], date2[2]);

// We use the getTime() method and get the unixtime (in milliseconds, but we want seconds, therefore we divide it through 1000)
date1_unixtime = parseInt(date1.getTime() / 1000);
date2_unixtime = parseInt(date2.getTime() / 1000);

// This is the calculated difference in seconds
var timeDifference = date2_unixtime - date1_unixtime;

// in Hours
var timeDifferenceInHours = timeDifference / 60 / 60;

// and finaly, in days :)
var timeDifferenceInDays = timeDifferenceInHours  / 24;
var rate=$('#interestrate').val()/30;
var totalint=rate*timeDifferenceInDays;
       
 $('#totalinterest').val(totalint);
       }
        function updaterenewal()
        {
          
           var modelDetails={
      'phonenumber':$('#phonenumber').val(),
      'bill_number':$('#billdata').val(),
      'start_date':$('#renewal').val(),
      'datatoasign':$('#datatoasign').val(),
      'end_date':$('#end_date').val(),
      'totalinterest':$('#totalinterest').val(),
      'action':'updaterenewal'
}
   $.ajax({
        type: "POST",
        url: "/Jeweller/php/jewellery/managedispurse.php",
        data: modelDetails
            });
   window.print();
        }
function datalist()
{
  
  var modelDetails={
      'item':$('#item').val()
    }
      $.ajax({
        type: "POST",
        url: "/Jeweller/php/common/updatejewelleryitems.php",
        data: modelDetails
            });
}