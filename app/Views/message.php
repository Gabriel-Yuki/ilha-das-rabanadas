<?php
include "./app/config.php";


if (isset($_SESSION['msg'])) :
    echo (" <div class='toast-container position-fixed top-0 end-0 p-3 '>
            <div id='toast' class='toast ' role='alert' aria-live='assertive' aria-atomic='true'>
                <div class='toast-header d-flex justify-content-between'>
                <i class='bi bi-info-circle'></i>
                   
                    
                    <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                </div>
                <div class='toast-body '>$_SESSION[msg]</div>
            </div>
        </div>") ?>
    <script>
        onload = () => {
            const toastEl = document.getElementById("toast");

            const toast = new bootstrap.Toast(toastEl);

            toast.show();
        };
    </script>
<?php
endif;
unset($_SESSION['msg']);

?>
