<!-- Libs JS -->
<script src="/assets/libs/apexcharts/dist/apexcharts.min.js" defer></script>
<script src="/assets/libs/jsvectormap/dist/js/jsvectormap.min.js" defer></script>
<script src="/assets/libs/jsvectormap/dist/maps/world.js" defer></script>
<script src="/assets/libs/jsvectormap/dist/maps/world-merc.js" defer></script>
<!-- Tabler Core -->
<script src="/assets/js/tabler.min.js" defer></script>
<script src="/assets/js/opai.min.js" defer></script>

<!-- AJAX CALLS -->
<script src="/assets/openai/js/jquery.js"></script>
<script src="/assets/openai/js/main.js"></script>
<script src="/assets/openai/js/toastr.min.js"></script>
<script src="/assets/libs/tom-select/dist/js/tom-select.base.min.js?1674944402" defer></script>


<!-- PAGES JS-->
<?php if(auth()->guard()->guest()): ?>
<script src="/assets/js/panel/login_register.js"></script>
<?php endif; ?>
<script src="/assets/js/panel/search.js"></script>

<script src="/assets/libs/list.js/dist/list.js" defer></script>


<?php /**PATH /var/www/html/resources/views/panel/layout/scripts.blade.php ENDPATH**/ ?>