$('#clickToRegister').on('click',function(){

    if($('#loginForm').css('display')!='none'){

        $('#registerForm').show().siblings('form').hide();
    }
});

$('#clickToLogin').on('click',function(){

    if($('#registerForm').css('display')!='none'){

        $('#loginForm').show().siblings('form').hide();
    }
});

$('#loginModal').on('hidden.bs.modal', function () {
    
    if($('#registerForm').css('display')!='none'){

        $('#loginForm').show().siblings('form').hide();
    }
});