// registration  section start
$(function(){
    $('.ordered-tour').click(function(){
        //show full card
        $('.full_card').addClass('hidden');
        let cardID = $(this).attr('full-card-id');
        let contentWidth  = 1000;
        let left = contentWidth / 2 -200;
        let top = $(window).height() / 2 - 220;
        $('#' + cardID).css('left', left).css('top', top).removeClass('hidden');
        $('.blackout-bg').show();
    });

    $('.blackout-bg').click(function(){
        $('.full_card_close_btn').trigger('click');
    });

    $('.full_card_close_btn').click(function(){
        let cardID = $(this).attr('full-card-id');
        $('#' + cardID).addClass('hidden');
        $('.blackout-bg').hide();
    });

    $('.cancel-tour').click(function (){
        if(!confirm("Ви дійсно бажаєте відмінити тур?")) return false;
        let tourID = $(this).attr('tour-id');
        unBook(tourID, this);
    });
});



function validateRegForm(){
    // Validate reg form fields
    return true;
}

$('#sign-up').click(function(){
    if(validateRegForm()){
        $('#reg-form').submit();
    }

    return false;
});


function validateSignForm() {
    return true;
}

$('#sign-in').click(function(){
    if(validateSignForm()){
        $('#signin-form').submit();
    }

    return false;
});

$('#logOut').click(function(){
    document.location = 'profile.php?logout=1';
});
// registration  section stop


// Remove user booking
function unBook(tourID, element) {
    $.post("profile.php",
        {
            action: "unbook",
            tourID: tourID
        }
    ).done(function (data) {
        // remove booking
        if(data == 1) $(element).closest('DIV').remove();
        else{
            alert('Сталася помилка!');
        }
    });
}


$('#close-profile-x').click(function(){
    history.back();
});

$('#hide-password').click(function (){
    $('#password-singIn').attr('type', 'text');
    $(this).hide();
    $('#show-password').show();
});

$('#show-password').click(function (){
    $('#password-singIn').attr('type', 'password');
    $(this).hide();
    $('#hide-password').show();
});

// AOS.init();



