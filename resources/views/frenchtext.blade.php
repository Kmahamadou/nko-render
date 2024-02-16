
@extends("layouts.template")

@section("content")
@include('partials.headerscd')

<main id="main" style="background-color: #f6f9fe;">

    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Saisie</h2>
            <h3><span>Fancais <i class="bi bi-pencil" style="margin-right:5px; color: #3399FF;"></i></span></h3>
            <p>Fournir une phrase ou un paragraphe en Francais:</p>

            <p class="fst-italic">   <strong> Objectif :</strong> Encourager les visiteurs à rédiger exclusivement en français.<br>
                <strong> Contribution de données :</strong> Cette tâche fournit un ensemble diversifié de données en langue française, contribuant à l'entraînement des modèles NKO pour comprendre et générer des traductions précises du français vers le NKO.
            </p>

        </div>

          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6">
              <form id="thisForm" method="post" action="{{ route('saveFrenchText') }}" role="form" onsubmit="submitForm(event)">
                  @csrf
                <div class="form-group">
                  <textarea class="form-control" id="sentence" name="sentence" rows="5" placeholder="Votre phrase en francais..." autofocus required></textarea>
                </div>
                <div class="my-3">
                  {{-- <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                </div>
                <div class="text-center"><button class="btn btn-primary" type="submit">Soumettre</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
    </main>

    <script>

        function submitForm(event) {
                // Prevent the default form submission
                event.preventDefault();

                // Get the form data
                var formData = new FormData(document.getElementById('thisForm'));

                // Validate the form data
                if (!validateForm()) {
                    return; // Stop if validation fails
                }

                // Make an AJAX request using the Fetch API
                fetch('https://nko-uyrz.onrender.com/api/frenchtext', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the server response
                    // console.log(data);
                    document.getElementById('sentence').value = '';

                    // Show a custom notification
                        setTimeout(() => {
                            showNotification("Phrase ajoutee avec succes !!!", 'success');
                        }, 10);
                })
                .catch(error => {

                        // Show a custom notification
                            setTimeout(() => {
                                showNotification("Une erreur est survenue, veuillez reessayer !!!", 'error');
                            }, 10);
                    // console.error('Error:', error);
                });
            }

        ////////////////////////////////// Form Validation /////////////////////////////
        function validateForm() {
            // Get the value of the textarea
            var sentence = document.forms[0].elements['sentence'].value;

            // Check if the input is null or contains only spaces
            if (!sentence.trim()) {
                    // Show a custom notification
                    setTimeout(() => {
                    showNotification("Aucun texte fourni", 'error');
                    }, 10);
                return false; // Prevent form submission
            }

            // Define a regex pattern for French/Latin characters
            var frenchLatinRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ\s,.:"']+$/;


            // Test if the sentence contains only French/Latin characters
            if (!frenchLatinRegex.test(sentence)) {
                // Identify the non-French/Latin characters and log them to the console
                var nonFrenchLatinCharacters = sentence.match(/^[A-Za-zÀ-ÖØ-öø-ÿ\s,.:"']+$/g);

                // Show a custom notification
                    setTimeout(() => {
                        showNotification("Veuillez entrer uniquement des caractères Français / Latins !!!", 'error');
                    }, 10);


                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }


            ////////////////////////////////// Notification /////////////////////////////

            function showNotification(message, type) {
                var notification = document.createElement('div');
                notification.textContent = message;
                notification.className = 'notification ' + type;

                document.body.appendChild(notification);

                // Trigger the animation
                setTimeout(() => {
                    notification.classList.add('show');
                }, 10);

                // Remove the notification after a delay
                setTimeout(() => {
                    notification.remove();
                }, 5000);
            }



    </script>


@endsection
