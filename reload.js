window.onpageshow = function(event) {
    if (event.persisted) {
        document.location.reload();
    }
};
