$(function() {

    // SWITCHERY - CHECKING STATE
    // =================================================================
    // Require Switchery
    // http://abpetkov.github.io/switchery/
    // =================================================================    

    var checkModule1 = document.getElementById('check-module-1');
    var checkModule2 = document.getElementById('check-module-2');
    var checkModule3 = document.getElementById('check-module-3');
    var checkModule4 = document.getElementById('check-module-4');
    var checkModule5 = document.getElementById('check-module-5');
    // init 
    for( var i = 1; i <= 5; i++ ) {

        changeState(i);
        new Switchery(document.getElementById('check-module-' + i), {color:'#35b9e7'});
    }
    
    // event
    checkModule1.onchange = function() { changeState(1); executeEvent("account") };
    checkModule2.onchange = function() { changeState(2); executeEvent("book") };
    checkModule3.onchange = function() { changeState(3); executeEvent("transaction") };
    checkModule4.onchange = function() { changeState(4); executeEvent("report") };
    checkModule5.onchange = function() { changeState(5); executeEvent("setting") };





    // send data
    function executeEvent( type ){

        var text = "";
        if ( type == "account" ) text = "Akun";
        else if ( type == "book" ) text = "Induk Buku";
        else if ( type == "transaction" ) text = "Peminjaman dan Pengembalian";
        else if ( type == "report" ) text = "Laporan";
        else if ( type == "setting" ) text = "Pengaturan Dasar";

        $.ajax({

            type : "GET",
            url  : serverside + 'accessbility/onUpdate?data=' + type,
            dataType : "json",
            success : function ( res ) {

                notification( "dark", text + " berhasil diperbarui", "center-right" );

            }, error : function( e ){

                console.log( e );
            }
        });
    } 


    // UI
    function changeState( id ){

        let sectionModule = $('#module-' + id);
        let labelModule   = $('#label-module-' + id);
        let checkBox      = $('#check-module-' + id);

        let checkNon = sectionModule.hasClass('task-danger');
        let checkAct = sectionModule.hasClass('task-info');

        if ( checkBox.is(':checked') ) {

            sectionModule.removeClass('task-danger');
            sectionModule.addClass('task-info');
            labelModule.text("Aktif").hide().fadeIn();
            
        } else {

            sectionModule.removeClass('task-info');
            sectionModule.addClass('task-danger');
            labelModule.text("Tidak Aktif");
        }
        
    }



        
    function notification( type, html, position = 'bottom-left' ) {

        $.niftyNoty({
            type: type,
            container : 'floating',
            html : html,
            closeBtn : false,
            timer : 6000,
            floating: {
                position: position,
                animationIn: 'jellyIn',
                animationOut: 'jellyOut'
            },
        });
    }

});