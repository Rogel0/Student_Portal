document.getElementById('regForm').addEventListener('submit', function(event) {
  event.preventDefault();
  document.getElementById('loadingScreen').style.display = 'flex';

  setTimeout(function() {
      document.getElementById('regForm').submit();
  }, 3000);
});