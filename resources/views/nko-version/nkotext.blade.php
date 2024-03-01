
@extends("layouts.nkoTemplate")

@section("content")
@include("partials.nko-headerscd")


<main id="main" style="background-color: #f6f9fe;">

    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Saisie</h2>
            <h3><span>ߒߞߏ <i class="bi bi-pencil" style="margin-right:5px; color: #3399FF;"></i></span></h3>
            <p>ߞߊ߬ ߞߟߏߜߍ ߛߓߍ߫ ߒߞߏ ߘߐߙߐ߲߫ ߘߐ߫ </p>
            <p class="fst-italic">    <strong>ߟߊ߬ߢߌߣߌ߲: ߞߊ߬ ߟߊ߬ߡߍ߲߬ߛߍ߲߬ߧߊ߬ߟߊ ߟߎ߬ ߘߐߛߎ߫ ߒߞߏ ߞߟߏߜߍ ߘߐߙߐ߲߫ ߛߓߍ߫ ߟߊ߫</strong><br>
              </p>
          </div>

          <div class="my-3">
            <div style="position: absolute; top:41%; right:50%;" class="spinner-border text-primary" role="status" id="loader" style="display: none;">
                <span class="visually-hidden">Chargement...</span>
            </div>
        </div>

          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6">
              <form id="thisForm" method="post" action="{{ route('saveNkoText') }}" role="form" onsubmit="submitForm(event)">
                  @csrf
                <div class="form-group">
                  <textarea oninput="updateCharacterCount(this)" maxlength="200" style="text-align: right;" class="form-control" id="sentence" name="sentence" rows="5" placeholder="Votre phrase en N'KO..." autofocus required></textarea>
                </div>
                <div id="charCount" class="mt-3 ">200 charactères restant</div>
                <div class="my-3">
                  {{-- <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                </div>
                <div class="text-center"><button class="btn btn-primary" type="submit">ߊ߬ ߟߊߘߏ߲߬ </button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
    </main>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        function updateCharacterCount(textarea) {
            console.log("oninput");
            var maxLength = parseInt(textarea.getAttribute('maxlength'));
            var currentLength = textarea.value.length;
            var remaining = maxLength - currentLength;
            var charCountElement = document.getElementById('charCount');
            charCountElement.textContent = remaining + ' charactères restant';
        }
    </script>


    <script>
        function submitForm(event) {
                // Prevent the default form submission
                event.preventDefault();
                var loader = document.getElementById('loader');



                // Show loader while the file is being uploaded
                loader.style.display = 'block';

                // Disable submit button to prevent multiple submissions
                $('#submitBtn').prop('disabled', true);

                // Get the form data
                var formData = new FormData(document.getElementById('thisForm'));

                // Validate the form data
                if (!validateForm()) {
                    return; // Stop if validation fails
                }

                // Make an AJAX request using the Fetch API
                fetch('https://nko-uyrz.onrender.com/api/nkotext', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                // Show loader while the file is being uploaded
                loader.style.display = 'none';

                // Disable submit button to prevent multiple submissions
                $('#submitBtn').prop('disabled', false);
                    // Handle the server response
                    // console.log(data);
                    document.getElementById('sentence').value = '';

                    // Show a custom notification
                        setTimeout(() => {
                            showNotification("Phrase ajoutee avec succes !!!", 'success');
                        }, 10);
                })
                .catch(error => {
                // Show loader while the file is being uploaded
                loader.style.display = 'none';

                // Disable submit button to prevent multiple submissions
                $('#submitBtn').prop('disabled', false);

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
                // Show loader while the file is being uploaded
                loader.style.display = 'none';

                // Disable submit button to prevent multiple submissions
                $('#submitBtn').prop('disabled', false);
                    // Show a custom notification
                    setTimeout(() => {
                    showNotification("Aucun texte fourni", 'error');
                    }, 10);

                    return false; // Prevent form submission
                }

                // Define a regex pattern for N'Ko characters
                // var nkoRegex = /^[\u07C0-\u07FF\s]+$/u;
                // var nkoRegex = /^[\u07C0-\u07F9\u07FA-\u07FF\s:()؟-]+$/u;

                var nkoRegex = /^[\u07C0-\u07F9\u07FA-\u07FF\s:()؟~.,"ߑ߸:."⁏/<>‹›،﴾﴿÷×_=%*°߹-]+$/u;


                // Test if the sentence contains only N'Ko characters
                if (!nkoRegex.test(sentence)) {
                // Show loader while the file is being uploaded
                loader.style.display = 'none';

                // Disable submit button to prevent multiple submissions
                $('#submitBtn').prop('disabled', false);
                    // Identify the non-N'Ko characters and log them to the console
                    // var nonNkoCharacters = sentence.match(/[^\u07C0-\u07FF\s:()؟-]/gu);
                    // console.error('Caracteres invalides trouves: ' + nonNkoCharacters.join(''));
                    var nonNkoCharacters = sentence.match(/[^\u07C0-\u07F9\u07FA-\u07FF\s:()؟~.,"ߑ߸:."⁏/<>‹›،﴾﴿÷×_=%*°߹-]/gu);

                    // Show a custom notification
                    setTimeout(() => {
                    showNotification("Caracteres invalides trouves dans votre texte: "+ nonNkoCharacters.join(' '), 'error');
                    }, 10);

                    // Show a custom notification
                    setTimeout(() => {
                            setTimeout(() => {
                            showNotification("Veuillez entrer uniquement des caractères N'Ko !!!", 'error');
                            }, 10);
                    }, 3000);

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
