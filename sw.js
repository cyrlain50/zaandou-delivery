const CACHE_NAME = 'zaandou-cache-v1';
const urlsToCache = [
  '/',
  '/index.php',
  '/css/style.css',
  '/js/app.js',
  '/img/logo.png',
  '/img/logo.png'
];

// Installer le Service Worker et mettre en cache les ressources
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Cache ouvert');
        return cache.addAll(urlsToCache);
      })
  );
});

// Intercepter les requêtes et servir depuis le cache
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        // Retourner la réponse en cache s'il y en a une
        if (response) {
          return response;
        }
        // Sinon, faire une requête réseau
        return fetch(event.request).then(
          response => {
            // Vérifie si la réponse est valide
            if (!response || response.status !== 200 || response.type !== 'basic') {
              return response;
            }

            // Clone la réponse
            const responseToCache = response.clone();

            // Ouvre le cache et met à jour la réponse
            caches.open(CACHE_NAME)
              .then(cache => {
                cache.put(event.request, responseToCache);
              });

            return response;
          }
        );
      })
  );
});

// Mise à jour du Service Worker et suppression des anciens caches
self.addEventListener('activate', event => {
  const cacheWhitelist = [CACHE_NAME];

  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});
