var notificationElement = document.querySelector('.main-notification');
var notificationContent = notificationElement.querySelector('.content')
var notificationColor = 'is-danger';
var notificationClose = document.querySelector('.main-notification .delete');

function showNotif(message) {
    if (message != null) {
        notificationContent = message;
    }

    notificationElement.classList.add('main-notification--show');
}

function hideNotif() {
    notificationElement.classList.remove('main-notification--show');
}

function changeColor(to) {
    notificationElement.classList.remove(notificationColor);
    notificationColor = to;
    notificationElement.classList.add(notificationColor);
}

function danger(message) {
    changeColor('is-danger');
    showNotif(message);
}

notificationClose.addEventListener('click', function() {
    hideNotif();
})
