$(document).ready(function () {
    $('#sidebarCollapse').on('click', function (e) {
        $('#sidebar').toggleClass('mobile');
        e.stopPropagation();
    });
    $(document).ready(function () {
        $('a.sidebar-nav-link').on('shown.bs.tab', function (event) {
            // console.log(event.target);
            localStorage.setItem('active', $(event.target).attr('href'));
            console.log(localStorage.getItem('active'));
        });
        var activeTab = localStorage.getItem('active');
        if (activeTab) {
            $('#sidetabs a[href="' + activeTab + '"]').tab('show');
        }
    });
    $('body,html').click(function(e){
        // console.log("body clicked")
        $('#sidebar').removeClass('mobile');
        // doesn't work on mobile chrome but works on desktop version
     });
     document.onclick = function(e){
        let menu_icon_box = document.querySelector("#sidebarCollapse");
        let box = document.querySelector("#sidebar");
        if (!menu_icon_box.contains(e.target) && !box.contains(e.target) ) {
            $('#sidebar').removeClass('mobile');
            // works on mobile and windows chrome
        }
    }
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
});