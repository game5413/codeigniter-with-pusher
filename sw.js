const version = "0.0.01";
const cacheName = `penjualan-${version}`;
self.addEventListener('install', e => {
  const timeStamp = Date.now();
  e.waitUntil(
    caches.open(cacheName).then(cache => {
      return cache.addAll([
        `/penjualan/`,
        `assets/assets/vendors/base/vendors.bundle.js`,
        `assets/assets/demo/default/base/scripts.bundle.js`,
        `assets/assets/vendors/base/vendors.bundle.css`,
        `assets/assets/demo/default/base/style.bundle.css`
      ])
          .then(() => self.skipWaiting());
    })
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(self.clients.claim());
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.open(cacheName)
      .then(cache => cache.match(event.request, {ignoreSearch: true}))
      .then(response => {
      return response || fetch(event.request);
    })
  );
});
  /*var request = event.request;
  var url = new URL(request.url);

  if (url.origin === location.origin) {
    console.log(url.origin);
    event.respondWith(
      caches.match(request).then(function(response) {
        return response || fetch(request);
      })
    );
  } else {
    event.respondWith(
      caches.open("ei-ei").then(function(cache) {
        return fetch(request)
          .then(function(liveResponse) {
            cache.put(request, liveResponse.clone());
            return liveResponse;
          })
          .catch(function() {
            return caches.match(request).then(function(response) {
              if (response) return response;
              return false;
            });
          });
      })
    );
  }
});*/

//Get Data From Cache
/*self.addEventListener('fetch', function(e) {
  e.respondWith(
    //Check from cache if data was available
    caches.match(e.request)
      .then(function(response) {
        if (response) {
          return response;
        }

        // IMPORTANT: Clone the request. A request is a stream and
        // can only be consumed once. Since we are consuming this
        // once by cache and once by the browser for fetch, we need
        // to clone the response.
        var fetchRequest = e.request.clone();

        return fetch(fetchRequest).then(
          function(response) {
            // Check if we received a valid response
            if(!response || response.status !== 200 || response.type !== 'basic') {
              return response;
            }

            // IMPORTANT: Clone the response. A response is a stream
            // and because we want the browser to consume the response
            // as well as the cache consuming the response, we need
            // to clone it so we have two streams.
            var responseToCache = response.clone();

            caches.open(cacheName)
              .then(function(cache) {
                cache.put(e.request, responseToCache);
              });

            return response;
          }
        );
      })
    );
});*/