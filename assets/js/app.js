(function ($) {
  $(document).ready(function () {
    $("body").on("click", "#notice-system .notice-dismiss", function () {
      setCookie("notice-system", 1, 60);
    });

    // set cookie
    function setCookie(cookieName, cookieValue, expiryInSeconds) {
      let expiry = new Date();
      expiry.setTime(expiry.getTime() + expiryInSeconds * 1000);
      document.cookie = `${cookieName}=${cookieValue}; expires=${expiry.toUTCString()}; path=/`;
    }
  });
})(jQuery);
