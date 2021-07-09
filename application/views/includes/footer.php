<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<script>
// $("#prod01").click(() => {
//     window.location.href = "<?= base_url()?>Home/camera";
// });

$(document).on('click', '.prod_redirect, .prod-btn', function() {
    // alert("ok");
    window.location.href = $(this).data('url');
})
</script>


<script>
const accordion = document.getElementsByClassName('contentbox');

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function() {
        this.classList.toggle('active');
    });
}
</script>

</html>