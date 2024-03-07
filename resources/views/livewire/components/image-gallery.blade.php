<div x-data="{
        init() {
            const lightbox = new PhotoSwipeLightbox({
                gallerySelector: '#gallery-{{ $uuid }}',
                childSelector: 'a',
                showHideAnimationType: 'fade',
                pswpModule: PhotoSwipe
            });
        }
    }">

    <div id="gallery-{{ $uuid }}" class="flex max-h-96 flex-row w-full rounded-lg justify-between gap-2">

        <div class="flex w-2/4 overflow-hidden max-h-96">
            <img src="{{ $images[0] }}" class="w-full rounded-l-lg">
        </div>

        <div class="flex flex-col w-2/4 overflow-hidden gap-2">
            <img src="{{ $images[1] }}" class="w-full h-half object-fill rounded-tr-lg" />

            <img src="{{ $images[2] }}" class="w-full h-half object-none rounded-br-lg" />
        </div>
    </div>
