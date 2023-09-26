$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('mobile');
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
});