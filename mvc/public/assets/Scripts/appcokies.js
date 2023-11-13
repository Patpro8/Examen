$(document).ready(function () {
    const cookieNotice = $("#cookie-notice");
    const acceptCookies = $("#accept-cookies");
    const manageCookies = $("#manage-cookies");

    if (localStorage.getItem("cookiesAccepted") !== "true") {
        cookieNotice.css("display", "block");
    }

    acceptCookies.click(function () {
        cookieNotice.css("display", "none");
        localStorage.setItem("cookiesAccepted", "true");
    });

    manageCookies.click(function () {
        cookieNotice.css("display", "block");
        localStorage.setItem("cookiesAccepted", "false");

    });
});
