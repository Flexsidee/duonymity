const assets = [
    "/index.php",
    "duonymity/images/icons/favicon.png",
    "main-css/bootstrap.css",
    "main-vendors/linericon/style.css",
    "main-vendors/owl-carousel/owl.carousel.min.css",
    "fonts/font-awesome-4.7.0/css/font-awesome.min.css",
    "main-vendors/lightbox/simpleLightbox.css",
    "main-vendors/nice-select/css/nice-select.css",    
    "main-vendors/animate-css/animate.css",    
    "main-vendors/popup/magnific-popup.css",
    "main-css/style.css",
    "main-css/responsive.css",
    "/"
]
let cache_name = "Duonymity"; // The string used to identify our cache

self.addEventListener("install", event => {
    console.log("installing...");
    event.waitUntil(
        caches
            .open(cache_name)
            .then(cache => {
                return cache.addAll(assets);
            })
            .catch(err => console.log(err))
    );
});

self.addEventListener("fetch", event => {
    if (event.request.url === "https://www.duonymity.com/") {
        // or whatever your app's URL is
        event.respondWith(
            fetch(event.request).catch(err =>
                self.cache.open(cache_name).then(cache => cache.match("/offline.html"))
            )
        );
    } else {
        event.respondWith(
            fetch(event.request).catch(err =>
                caches.match(event.request).then(response => response)
            )
        );
    }
});