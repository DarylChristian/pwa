//adding a global bucket
$('#bucket_class').change(function(){
    var b_class = $('#bucket_class').val();
    //$.post('ajax/queries.php', {'b_class': b_class}, function(data){
     //$('.add_bucket_name').text(data);

    $('.hidden_tf1').addClass('hidden');
    //disabling the 2nd dropdown
    if(b_class != 0)
    {
        document.getElementById("add_bucket_name").disabled=false;
        $('#btn_add_bucket').removeClass('disabled');
    }else
    {
        document.getElementById("add_bucket_name").disabled=true;
        $('#btn_add_bucket').addClass('disabled');
    }
    //ajax method
    $.ajax({
    type: "POST",
    url: 'ajax/queries.php',
    data: {'b_class': b_class},
    dataType:'json',
    success: function(data) { 
      //
       var select = $("#add_bucket_name"), options = '';
       select.empty();      

       for(var i=0;i<data.length; i++)
       {
        options += "<option value='"+data[i].id+"'>"+ data[i].name +"</option>";              
       }
       select.append(options);
    }
    });
    if(b_class == 4 || b_class == 5 || b_class == 6)
    {
       $('.hidden_tf1').removeClass('hidden');
    }
});
//adding a ticket bucket
$('#bucket_class').change(function(){
    var b_class2 = $('#bucket_class').val();
        $('.hidden_tf2').addClass('hidden');
    if(b_class2 == 6)
    {
        $('.hidden_tf2').removeClass('hidden');
    }
});


//checking if add_bucket_name is disabled
$('#add_bucket_name').change(function(){
    $('#btn_add_bucket').removeClass('disabled');
});

//checkbox checkAll
$("#checkAll1").change(function () {
    $(".stage1").prop('checked', $(this).prop("checked"));
});
$("#checkAll2").change(function () {
    $(".stage2").prop('checked', $(this).prop("checked"));
});
$("#checkAll3").change(function () {
    $(".stage3").prop('checked', $(this).prop("checked"));
});