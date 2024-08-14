document.getElementById('sidebarToggle').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    var navbar = document.querySelector('.navbar');
    var content = document.getElementById('mainContent');

    if (sidebar.classList.contains('hide')) {
        sidebar.classList.remove('hide');
        navbar.style.marginLeft = '250px';
        content.style.marginLeft = '250px';
    } else {
        sidebar.classList.add('hide');
        navbar.style.marginLeft = '0';
        content.style.marginLeft = '0';
    }
});
