<?php
if (session()->getFlashdata('toast-msg') != null) {
    echo '<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">';
};
?>

<?php
if (session()->getFlashdata('toast-msg') != null) {
    echo '<div style="position: fixed; top: 0; right: 0;">
                <div aria-live="polite" aria-atomic="true" style="margin-top: 20px; position: relative; min-height: 200px;">
                    <div id="dynamic-toast" class="toast hide" data-autohide="true" style="border-radius: 15px 0 0 15px;">
                        <div id="box-toast" style="background-color:' . session()->getFlashdata('toast-color') . ';border-radius: 15px 0 0 15px;min-height: 80px;" class="toast-body text-white">
                            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                            <p id="msg-toast">' . session()->getFlashdata('toast-msg') . '</p>
                            <p id="msg-toast">' . session()->getFlashdata('toast-msg-secondary') . '</p>
                            </div>
                    </div>
                </div>
            </div>';
}
?>

<?php
if (session()->getFlashdata('toast-msg') != null) {
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
        <script>
            window.onload = ()=>{
                $(document).ready(function () {
                    $("#dynamic-toast").toast("show");
                });
            }
        </script>';
};
?>