// Basic scripts for Flowtrack theme

document.addEventListener('DOMContentLoaded', function () {
  var forms = document.querySelectorAll('form.contact-form-validated');
  forms.forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      fetch(form.getAttribute('action'), {
        method: 'POST',
        body: new FormData(form)
      })
        .then(function (r) { return r.text(); })
        .then(function () {
          alert('Message sent!');
        })
        .catch(function () {
          alert('Failed to send message');
        });
    });
  });
  console.log('Flowtrack JS loaded');
});
