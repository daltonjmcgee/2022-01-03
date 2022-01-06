window.addEventListener("DOMContentLoaded", () => {
  const userButton = document.getElementById('wp-admin-bar-top-secondary');
  const publishButton = document.getElementById('wp-admin-bar-publish');
  publishButton.setAttribute('style', `right:calc(${userButton.offsetWidth}px + 7px)`);
  window.addEventListener('resize', () => {
    publishButton.setAttribute('style', `right:calc(${userButton.offsetWidth}px + 7px)`);
  })
})
