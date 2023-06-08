'use strict'
window.addEventListener('load',function(){
    var contend_body = document.getElementById('contend-body');
    contend_body.style.height = window.innerHeight + "px";
    window.addEventListener('resize', function(){
        function getBom(){
            contend_body.style.height = window.innerHeight + "px";
        }
        getBom();
    });
        var report_options = document.getElementById('report_options');
        var btn_active_nav = document.getElementById('box_nav_a');
        report_options.addEventListener("click",function(){
            if (btn_active_nav.className=="box_nav_a active"){
                btn_active_nav.className="box_nav_a";
            }else{
                btn_active_nav.className="box_nav_a active";
            }
        });
        var add_options = document.getElementById('add_options');
        var btn_active_nav_add = document.getElementById('box_nav_a_add');
        add_options.addEventListener("click",function(){
            if (btn_active_nav_add.className=="box_nav_a active"){
                btn_active_nav_add.className="box_nav_a";
            }else{
                btn_active_nav_add.className="box_nav_a active";
            }
        });

});