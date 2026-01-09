// Bootstrap 5 native wizard implementation (no jQuery, no bootstrapWizard plugin)
document.addEventListener("DOMContentLoaded", function () {
  var triggerTabList = [].slice.call(document.querySelectorAll('.twitter-bs-wizard-nav .nav-link'));
  triggerTabList.forEach(function (triggerEl, idx) {
    var tabTrigger = new bootstrap.Tab(triggerEl);
    triggerEl.addEventListener('click', function (event) {
      event.preventDefault();
      tabTrigger.show();
    });
    // Update progress bar on tab shown
    triggerEl.addEventListener('shown.bs.tab', function () {
      // Evenly divide progress for 3 stages: 0%, 50%, 100%
      var progress = (idx) / (triggerTabList.length - 1) * 100;
      var progressBar = document.querySelector('.progress-bar');
      if (progressBar) {
        progressBar.style.width = progress + '%';
      }
    });
  });
});

function nextTab() {
  var active = document.querySelector('.twitter-bs-wizard-nav .nav-link.active');
  if (!active) return;
  var next = active.closest('li').nextElementSibling;
  if (next) {
    var nextLink = next.querySelector('.nav-link');
    if (nextLink) {
      var tab = new bootstrap.Tab(nextLink);
      tab.show();
    }
  }
}

function prevTab() {
  var active = document.querySelector('.twitter-bs-wizard-nav .nav-link.active');
  if (!active) return;
  var prev = active.closest('li').previousElementSibling;
  if (prev) {
    var prevLink = prev.querySelector('.nav-link');
    if (prevLink) {
      var tab = new bootstrap.Tab(prevLink);
      tab.show();
    }
  }
}