@extends('layouts.template')

<link rel="stylesheet" href="{{ secure_asset('assets/css/reset.css') }}">
<link rel="stylesheet" href="{{ secure_asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ secure_asset('assets/css/record-style.css') }}">

@section('content')
    <div class="container">
        @include('partials.headerscd')
    </div>



    <main id="main" style="background-color: #f6f9fe;">

        <!-- ======= Audio Record Section ======= -->
        <section class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Enregistrement vocal</h2>
                    <h3><span>Lecture<i class="fas fa-microphone" style="margin-right:5px; color: #3399FF;"></i></span>
                    </h3>
                    <p style="margint: 20px auto;"> <i class="fas fa-microphone"
                            style="margin-right:5px; color: #3399FF;"></i>
                            Lire la phrase suivante :
                    </p>



                    <p class="fst-italic">
                        <strong>Objectif :</strong> Vocaliser le texte affiché en alphabet NKO. <br>
                        {{-- Contribution de données : Cette activité contribue à la collecte de données audio en NKO, aidant au développement de modèles de transcription de la parole spécifiques à la langue NKO. Cela contribue à améliorer la précision dans la transcription de la langue NKO parlée, facilitant une meilleure communication et accessibilité. --}}
                    </p>

                </div>

                @if (!isset($randomSentence->sentence))
                    <p>Aucune phrase</p>
                @else
                    <!-- Custom Card Component with shadow and padding -->
                    <div style="font-size: 21px; box-shadow: 0px 7px 13px rgba(0, 0, 0, 0.2); padding: 15px; background-color: white; border-radius: 8px; width: 50%;"
                        class="mx-auto my-5">
                        <p style="text-align: right; font-size: 1em;" id="next_nko_sentence">{{ $randomSentence->sentence }}</p>
                        <div class="my-3">
                        <div id="loader"></div>
                        </div>
                    </div>
                    <!-- End Custom Card Component -->
                    <input type="hidden" id="sentence" name="sentence" value="{{ $randomSentence->sentence }}" />
                @endif


                <div style="display: flex; flex-direction:row; justify-content: space-around" class="mt-1">
                    <div class="col-lg-2 text-end">
                        <button type="button" class="btn btn-light rounded-circle shadow-lg p-3 mb-5 rounded" id="prevSentence" onclick="getRandomSentence('prev')"></i><i class="bi bi-shuffle ml-2"></i></button>
                    </div>

                    <div style="position: absolute; top:41%; right:50%;" class="my-3">
                        <div class="spinner-border text-primary" role="status" id="loader" style="display: none;">
                            <span class="visually-hidden">Chargement...</span>
                        </div>
                    </div>

                    <div class="col-lg-2 text-start">
                        <button type="button" class="btn btn-light rounded-circle shadow-lg p-3 mb-5 rounded" id="nextSentence" onclick="getRandomSentence('next')"><i class="bi bi-shuffle mr-2"></i></i></button>
                    </div>
                </div>



                <div class="audio-recording-container" data-aos="fade-down" data-aos-delay="250">
                    {{-- <h1 class="title">Audio Recording API Demo</h1> --}}
                    <div class="recording-contorl-buttons-container hide">
                        <i class="cancel-recording-button fa fa-times-circle" aria-hidden="true"></i>
                        <div class="recording-elapsed-time">
                            <i class="red-recording-dot fa fa-circle" aria-hidden="true"></i>
                            <p class="elapsed-time"></p>
                        </div>
                        <i class="stop-recording-button fa fa-stop-circle" aria-hidden="true"></i>
                    </div>
                    <i class="start-recording-button fa fa-microphone" aria-hidden="true"></i>
                    <div class="text-indication-of-audio-playing-container">
                        <p class="text-indication-of-audio-playing hide">Audio is playing<span>.</span><span>.</span><span>.</span></p>
                    </div>
                </div>
                <div class="overlay hide">
                    <div class="browser-not-supporting-audio-recording-box">
                        <p>To record audio, use browsers like Chrome and Firefox that support audio recording.</p>
                        <button type="button" class="close-browser-not-supported-box">Ok.</button>
                    </div>
                </div>

                <audio controls class="audio-element hide">
                </audio>


            <div class="col-12 mx-auto mt-5 text-center" id="sending">Envois encours ...</div>
            <div class="col-12 mx-auto mt-5 text-center" id="recording">Enregistrement encours...<br /> Clicquer pour
                envoyer
            </div>
        </div>

        </section><!-- End Audio Record Section -->
    </main>

    <script src="{{ secure_asset('assets/js/audio-recording.js') }}"></script>
    <script src="{{ secure_asset('assets/js/index.js') }}"></script>


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> --}}

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script>
        let recorder = null

        // Flag to track whether audio is being uploaded
        let isAudioUploading = false;
        var loader = document.getElementById('loader');
        var sending = document.getElementById('sending');
        var recording = document.getElementById('recording');
        // var recorder_block = document.getElementById('recorder-block');
        var progressBar = document.getElementById('progress-bar');
        sending.style.display = 'none';
        recording.style.display = 'none';


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





        function sendVoiceNote(base64) {
            // create an instance for AJAX
            var ajax = new XMLHttpRequest()

            isAudioUploading = true;
            // disableOnClick();

            // Show loader while the file is being uploaded
            loader.style.display = 'block';
            // recorder_block.style.display = 'none';
            sending.style.display = 'block';
            recording.style.display = 'none';


            // Disable submit button to prevent multiple submissions
            $('#submitBtn').prop('disabled', true);



            var text = document.getElementById("sentence");
            var textValue = text.value;
            // send base64 string to server
            var valeurs = [base64, textValue];
            const formData = new FormData();


            for (let index = 0; index < valeurs.length; index++) {
                const element = valeurs[index];

                formData.append("valeur" + index, valeurs[index])
            }

            // set request method as POST, set URL and set asynchronous to true
            ajax.open("POST", "https://nko-uyrz.onrender.com/api/enregistrement-audio-nko", true)

            // whenever the status of request is changed
            ajax.onreadystatechange = async function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {

                        try {
                            const jsonData = JSON.parse(this.responseText.replace(/^\uFEFF/, ''));
                            // Handle the JSON data
                            console.log(jsonData['next_nko_sentence']);
                            document.getElementById("sentence").value = jsonData["next_nko_sentence"];
                            document.getElementById('next_nko_sentence').textContent = jsonData['next_nko_sentence'];
                        } catch (error) {
                            console.error("Error parsing JSON:", error);
                            console.log("Non-JSON response:", this.responseText);  // Log the response for debugging
                        }


                        // Simulating a successful file upload
                        setTimeout(() => {
                            // Show a custom notification
                            showNotification('Vocal envoyer avec succes !', 'success');
                        }, 100); // Simulated upload time (adjust as needed)





                        // Hide loader after upload is complete
                        loader.style.display = 'none';
                        // recorder_block.style.display = 'block';
                        sending.style.display = 'none';

                        isAudioUploading = false;
                        // console.log(this.responseText)

                    }

                    if (this.status == 500) {
                        isAudioUploading = false;

                        // Simulating a successful file upload
                        setTimeout(() => {
                            // Show a custom notification
                            showNotification('Une erreur est survenue, veuillez reessayer !', 'error');
                        }, 100); // Simulated upload time (adjust as needed)


                        // Hide loader after upload is complete
                        loader.style.display = 'none';
                        // recorder_block.style.display = 'block';
                        sending.style.display = 'none';

                        // Disable the onClick event during the upload
                        // document.getElementById('icon-record-audio').style.color = '#DC143C';

                        // Re-enable the onClick event after the upload is complete
                        // enableOnClick();


                        // console.log(this.responseText)
                    }
                }
            }

            ajax.send(formData)
        }





    function getRandomSentence(direction) {

        // Display loader while fetching new sentence
        console.log("direction");
        console.log(direction);
        $('#loader').show();

        // Example using jQuery
        $.ajax({
            url: '/api/getRandomNkoSentence',
            method: 'get',
            data: { direction: direction },
            success: function (response) {
                console.log(response);

                // Hide loader when the AJAX request is complete
                $('#loader').hide();


                setTimeout(() => {
                            // Show a custom notification
                        }, 700);

                // Update the displayed sentence
                $('#next_nko_sentence').text(response.sentence);
                // Update the hidden input value for form submission
                $('#sentence').val(response.sentence);
            },
            error: function (error) {

                // Hide loader when the AJAX request is complete
                $('#loader').hide();
                console.log(error);
            }
        });
    }


    </script>



@endsection
