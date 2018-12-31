function fileUpload(){
    var myFormData = new FormData();
    var userFileId = document.getElementById('import');
  myFormData.append('import', userFileId.files[0]);

    var fileName = userFileId.files[0].name;
    $('#userFileName').val(fileName);

    $.ajax({
      url: "/Jeweller/php/jewellery/fileupload.php",
      type: "POST",
      processData: false, // important
      contentType: false, // important
      data: myFormData,
      success: function (data) {
         swal({
              title: "File has been uploaded",
              text: "Your Plan Has Been Created",
              type: "success",
              closeOnConfirm: true,
              showLoaderOnConfirm: true
            });

      }
    });
}
function update()
{

    var modelDetails={
 'userFileName':$('#userFileName').val(),
 'name':$('#name').val(),
 'number':$('#number').val(),
 'address':$('#address').val(),
    }
 $.ajax({
      url: "/Jeweller/php/jewellery/updateuseradmin.php",
      type: "POST",
      data:modelDetails,
      });
 window.location="/Jeweller/view/superadmindata.php";
    }