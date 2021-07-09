<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<script>
// $("#prod01").click(() => {
//     window.location.href = "<?= base_url()?>Home/camera";
// });

$("#prod01, #prod-camera").click(() => {
    window.location.href = "<?= base_url()?>Home/camera";
});
$("#prod02, #prod-panel").click(() => {
    window.location.href = "<?= base_url()?>Home/panel";
});
$("#prod03, #prod-sensor").click(() => {
    window.location.href = "<?= base_url()?>Home/sensor";
});
$("#prod04, #prod-interface").click(() => {
    window.location.href = "<?= base_url()?>Home/interface";
});
$("#prod05, #prod-ic").click(() => {
    window.location.href = "<?= base_url()?>Home/ic";
});
$("#prod06, #prod-board").click(() => {
    window.location.href = "<?= base_url()?>Home/board";
});
</script>


</html>