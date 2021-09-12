$(document).ready(function(){
     
    $('#form').parsley();
    
    let path = window.location.href;
    let newPath = path.split('admin');
    if(newPath[1] == '/dashboard.php'){
        $('.nav-link:eq(0)').addClass('active');
    } else if(newPath[1] == '/addQuotes.php'){
        $('.nav-link:eq(1)').addClass('active');
    } else if(newPath[1] == '/viewQuotes.php'){
        $('.nav-link:eq(2)').addClass('active');
    }

    $('#quotesTable').DataTable();

});

function loginAlertFun(loginError) {
    if(loginError == '1'){
        $('#loginAlertEl').show();
        setTimeout(function(){
            $('#loginAlertEl').hide(500);
        }, 2500);
    } else if(loginError == '0'){
        $('#loginAlertEl').hide();
    }
}

function alertFun(flag) {
    if(flag == '1'){
        $('#alertEl').show();
        setTimeout(function(){
            $('#alertEl').hide(500);
        }, 2500);
    } else if(flag == '0'){
        $('#alertEl .alert').removeClass('alert-success').addClass('alert-danger').html('Something went wrong!').show();
        setTimeout(function(){
            $('#alertEl').hide(500);
        }, 2500);
    } else if(flag == '2'){
        $('#alertEl').hide();
    }
}

function deleteQuote(id){
    $("#yesBtnDM").on('click', function(){
        $.ajax({
            url:'deleteQuote.php',
            data:'id='+id,
            method:'get',
            dataType:'json',
            success:function(res){
                if(res.status){
                    window.location.href = "viewQuotes.php?delSuccess=1";
                } else {
                    window.location.href = "viewQuotes.php?delSuccess=0";
                }
            }
        });
        $("#yesBtnDM").off('click');
    });
}

$('#deleteModal').on('hidden.bs.modal', function () {
    $("#yesBtnDM").off('click');
});