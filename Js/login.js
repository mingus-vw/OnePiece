document.addEventListener("DOMContentLoaded", function() {
    const openLoginButton = document.getElementById("open-login");
    const loginOverlay = document.getElementById("login-overlay");
    const closeLoginPopupButton = document.getElementById("close-login-popup");
    const openRegisterButton = document.getElementById("open-register");
    const registerOverlay = document.getElementById("register-overlay");
    const closeRegisterPopupButton = document.getElementById("close-register-popup");

    if (openLoginButton) {
        openLoginButton.addEventListener("click", function() {
            loginOverlay.style.display = "block";
        });
    }

    if (openRegisterButton) {
        openRegisterButton.addEventListener("click", function() {
            loginOverlay.style.display = "none";
            registerOverlay.style.display = "block";
        });
    }

    if (closeLoginPopupButton) {
        closeLoginPopupButton.addEventListener("click", function() {
            loginOverlay.style.display = "none";
        });
    }

    if (closeRegisterPopupButton) {
        closeRegisterPopupButton.addEventListener("click", function() {
            registerOverlay.style.display = "none";
        });
    }

    window.addEventListener("click", function(event) {
        if (event.target === loginOverlay) {
            loginOverlay.style.display = "none";
        }
        if (event.target === registerOverlay) {
            registerOverlay.style.display = "none";
        }
    });
});
