
@extends("layouts.nkoTemplate")

@section("content")
@include("partials.nko-headerscd")

<main id="main" style="background-color: #f6f9fe;">

    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>ߒߞߏ</h2>
            <h3><span> ߞߊ߬ ߞߎߡߦߊ ߣߊ߬ߕߐ߫ ߢߌ߲߬ ߘߟߊߡߌ߬ߘߊ߬ ߒߞߏ ߘߐ߫ <i class="bi bi-pencil" style="margin-right:5px; color: #3399FF;"></i></span></h3>


            <p style="margin: 20px auto;"> <i class="fas fa-language"
                style="margin-right:5px; color: #3399FF;"></i>
                ߘߟߊߡߌߘߊߟߌ ߞߊ߬ ߝߊ߬ߙߊ߲߬ߛߌ߬ߞߊ߲ ߘߟߊߡߌ߬ߘߊ߬
            </p>
            <p class="fst-italic">   <strong> ߟߊ߬ߢߌߣߌ߲ : ߞߊ߬ ߝߊ߬ߙߊ߲߬ߛߌ߬ߞߊ߲ ߞߟߏߜߍ ߡߊߦߌ߬ߘߊ߬ߣߍ߲ ߘߟߊߡߌ߬ߘߊ߬ ߓߡߊߣߊ߲ߞߊ߲ ߠߊ߫ ߣߌ߫ ߒߞߏ ߛߓߍߛߎ߲ ߘߌ߫</strong><br>
            </p>

            @if (!isset($randomSentence->sentence))
                <p>Aucune phrase</p>
            @else
                <!-- Custom Card Component with shadow and padding -->
                <div style="font-size: 21px; box-shadow: 0px 7px 13px rgba(0, 0, 0, 0.2); padding: 20px; background-color: white; border-radius: 8px; width: 50%;" class="mx-auto my-5">
                    <p id="french_sentence" style="font-size: 1em;">{{ $randomSentence->sentence }}</p>
                </div>
                <!-- End Custom Card Component -->
            @endif
          </div>

          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            @if (isset($randomSentence->sentence))
            <div class="col-lg-6">
                <div style="display: flex; flex-direction:row; justify-content: space-around" class="mt-1">
                  <div class="col-lg-2 text-end">
                      <button type="button" class="btn btn-light rounded-circle shadow-lg p-3 mb-5 rounded" id="prevSentence" onclick="getRandomSentence('prev')"></i><i class="bi bi-shuffle ml-2"></i></button>
                  </div>

                  <div class="my-3">
                      <div style="position: absolute; top:41%; right:50%;" class="spinner-border text-primary" role="status" id="loader" style="display: none;">
                          <span class="visually-hidden">Chargement...</span>
                      </div>
                  </div>

                  <div class="col-lg-2 text-start">
                      <button type="button" class="btn btn-light rounded-circle shadow-lg p-3 mb-5 rounded" id="nextSentence" onclick="getRandomSentence('next')"><i class="bi bi-shuffle mr-2"></i></i></button>
                  </div>
              </div>
              <form id="thisForm" method="post" action="{{ route('saveFrenchToNko') }}" role="form" onsubmit="submitForm(event)">
                  @csrf
                  <input type="hidden" id="randomFrenchSentence" name="randomFrenchSentence" value="{{ $randomSentence->sentence }}">
                <div class="form-group">
                  <textarea oninput="updateCharacterCount(this)" maxlength="200" style="text-align: right;" class="form-control" id="sentence" name="sentence" rows="5" placeholder="Votre traduction..." autofocus required></textarea>
                </div>
                <div id="charCount" class="mt-3 ">200 charactères restant</div>
                <div class="my-3">
                  {{-- <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                </div>
                <div style="display: flex; flex-direction:row; justify-content: space-around">
                    <div><button class="btn btn-primary shadow-lg p-3 mb-5 rounded" id="submitBtn" type="submit">Soumettre</button></div>
                </div>
            </form>
            </div>

            @endif

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
                // Display loader while submitting the form
                $('#loader').show();

                // Disable submit button to prevent multiple submissions
                $('#submitBtn').prop('disabled', true);

                // Get the form data
                var formData = new FormData(document.getElementById('thisForm'));

                // Validate the form data
                if (!validateForm()) {
                    return; // Stop if validation fails
                }

                // Make an AJAX request using the Fetch API
                fetch('https://nko-uyrz.onrender.com/api/frenchtonko', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    $('#loader').hide();

                    // Disable submit button to prevent multiple submissions
                    $('#submitBtn').prop('disabled', false);
                    // Handle the server response
                    // console.log(data['next_french_sentence']);
                    document.getElementById('sentence').value = '';
                    document.getElementById('french_sentence').textContent = data['next_french_sentence'];

                    // Show a custom notification
                        setTimeout(() => {
                            showNotification("Phrase ajoutee avec succes !!!", 'success');
                        }, 10);

                        // Show a custom notification
                        setTimeout(() => {
                            setTimeout(() => {
                                showNotification("Nouvelle phrase a traduire", 'success');
                            }, 10);
                        }, 3000);
                })
                .catch(error => {
                    $('#loader').hide();

                    // Disable submit button to prevent multiple submissions
                    $('#submitBtn').prop('disabled', false);
                        // console.log(error)
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
                    $('#loader').hide();

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
            var nkoRegex = /^[\u07C0-\u07F9\u07FA-\u07FF\s:()؟.,"ߑ߸:⁏~."</>‹›،﴾﴿÷×_=%*°߹-]+$/u;
            // var nkoRegex = /^[\u07C0-\u07F9\u07FA-\u07FF\s:()؟ߑ߸:."‹›،÷×°߶ߩ߹߷ߪ\/ߺ﴿﴾\[\]߳\-_=%*()\\]+$/u;

            // Test if the sentence contains only N'Ko characters
            if (!nkoRegex.test(sentence)) {
                    $('#loader').hide();

                    // Disable submit button to prevent multiple submissions
                    $('#submitBtn').prop('disabled', false);
                // Identify the non-N'Ko characters and log them to the console
                var nonNkoCharacters = sentence.match(/[^\u07C0-\u07FF\s:()؟.,"ߑ߸:~⁏."</>‹›،﴾﴿÷×_=%*°߹-]/gu);
                // var nonNkoCharacters = sentence.match(/[^\u07C0-\u07FF\s:()؟ߑ߸:."‹›،÷×°߶ߩ߹߷ߪ\/ߺ﴿﴾\[\]߳\-_=%*()\\]/gu);
                // console.error('Caracteres invalides trouves: ' + nonNkoCharacters.join(''));


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




    function getRandomSentence(direction) {

        // Display loader while fetching new sentence
        console.log("direction");
        console.log(direction);
        $('#loader').show();

        // Example using jQuery
        $.ajax({
            url: '/api/getRandomFrenchSentence',
            method: 'get',
            data: { direction: direction },
            success: function (response) {
                console.log(response);

                // Hide loader when the AJAX request is complete
                $('#loader').hide();
                // Update the displayed sentence
                $('#french_sentence').text(response.sentence);
                // Update the hidden input value for form submission
                $('#randomFrenchSentence').val(response.sentence);
                // Clear the textarea for the new translation
                $('#sentence').val('');
            },
            error: function (error) {

                // Hide loader when the AJAX request is complete
                $('#loader').hide();
                console.log(error);
            }
        });
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
