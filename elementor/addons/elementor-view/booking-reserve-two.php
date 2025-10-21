<?php if ('layout_two' === $settings['layout_type']) : ?>
    <section class="gt-booking section-bg-3">
        <div class="container">
            <div class="gt-booking-reserve-wrapper style-2">
                <div>
                    <?php echo str_replace("<br />", "", trim(do_shortcode('[contact-form-7 id="' . $settings['layout_two_select_wpcf7_form'] . '" ]'))); ?>
                </div>
                <h4 class="text-white">Check-out time: before 11:00 am; check-in time: after 2:00 pm</h4>
            </div>
        </div>
    </section>
<?php endif; ?>