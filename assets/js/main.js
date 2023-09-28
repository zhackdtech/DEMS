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
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
});