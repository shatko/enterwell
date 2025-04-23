import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

document.addEventListener( 'wpcf7mailsent', function( event ) {
  setTimeout( () => {
      location = '/success/';
  }, 1000 );
}, false );
