<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script>

    function testAnim(x) {
        $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass();
        });
    }
    ;

    $(document).ready(function () {
        $('.js--triggerAnimation').click(function (e) {
            e.preventDefault();
            var anim = $('.js--animations').val();
            testAnim(anim);
        });

        $('.js--animations').change(function () {
            var anim = $(this).val();
            testAnim(anim);
        });
    });

</script>
