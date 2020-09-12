<section id="location-maps" class="map-responsive">
    <!-- Map -->
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?q={{ $location->street.",".$location->location }}&z={{ Maps::zoomFactor() }}&output=embed"
        ></iframe>

    <!-- /Map -->
</section>
