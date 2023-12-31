// service-worker.js
const CACHE_NAME = 'your-app-cache';
const urlsToCache = [
  '/',
//   '/index.html',
  '/styles.css',
  '/landing.js',
  '/main.js',
  '/signin.js',
  '/signup.js',
  '/landing.html',
  '/main.html',
  '/signin.html',
  '/signup.html',
  '/icon.png'
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => cache.addAll(urlsToCache))
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request)
      .then((response) => response || fetch(event.request))
  );
});

self.addEventListener('activate', (event) => {
    const cacheWhitelist = [CACHE_NAME];
  
    event.waitUntil(
      caches.keys().then((cacheNames) => {
        return Promise.all(
          cacheNames.map((cacheName) => {
            if (cacheWhitelist.indexOf(cacheName) === -1) {
              return caches.delete(cacheName);
            }
          })
        );
      })
    );
  });