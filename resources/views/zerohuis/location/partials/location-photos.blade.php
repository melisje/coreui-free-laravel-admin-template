<section id="location-photos">
    <div class="bg-white mb-0">
        <ul class="photo-gallery mt-5 mb-0">
            @foreach($location->photos as $photo)
                <li>
                    <img src="{{ $photo->download_url }}" alt="photo" class="">
                </li>
            @endforeach
        </ul>
    </div>
</section>
