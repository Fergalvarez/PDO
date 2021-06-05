<?php
define('ProPayPal', 0);
if(ProPayPal){
    define("PayPalClientId", "AcEq3jFOp4CXKjSV8eHsZPkbHGnqYULn44ZKD1HkXmO04s9-AlMtjRRtsoQgGc-mkhdZOSPOtD9G8Rj6");
    define("PayPalSecret", "EP42QZPT_d1EhZ4N3NaOjqgLad8bB0l2kp4jpwWmGpwo-9Z0ui5lL__T2zijSNakYRqgfmx_0AFlWa6f");
    define("PayPalBaseUrl", "https://api.paypal.com/v1/");
    define("PayPalENV", "production");
} else {
    define("PayPalClientId", "AcEq3jFOp4CXKjSV8eHsZPkbHGnqYULn44ZKD1HkXmO04s9-AlMtjRRtsoQgGc-mkhdZOSPOtD9G8Rj6");
    define("PayPalSecret", "EP42QZPT_d1EhZ4N3NaOjqgLad8bB0l2kp4jpwWmGpwo-9Z0ui5lL__T2zijSNakYRqgfmx_0AFlWa6f");
    define("PayPalBaseUrl", "https://api.sandbox.paypal.com/v1/");
    define("PayPalENV", "sandbox");
}
?>
