@extends('layouts.nkoTemplate')

<link rel="stylesheet" href="{{ secure_asset('assets/css/reset.css') }}">
<link rel="stylesheet" href="{{ secure_asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ secure_asset('assets/css/record-style.css') }}">

@section('content')
    <div class="container">
        @include('partials.nko-headerscd')
    </div>



    <main id="main" style="background-color: #f6f9fe;">

        <!-- ======= Audio Record Section ======= -->
        <section class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Enregistrement vocal</h2>
                    <h3><span>ߟߊ߬ߞߊ߬ߙߊ߲߬ߠߌ߲ <i class="fas fa-microphone" style="margin-right:5px; color: #3399FF;"></i></span>
                    </h3>
                    <p style="margint: 20px auto;"> <i class="fas fa-microphone"
                            style="margin-right:5px; color: #3399FF;"></i>
                            ߞߎߡߦߊ ߣߊ߬ߕߐ߫ ߢߌ߲߬ ߞߊ߬ߙߊ߲߬
                    </p>

                    <p class="fst-italic">
                        <strong>ߟߊ߬ߢߌߣߌ߲ : ߞߊ߬ ߒߞߏ ߛߓߍߛߎ߲ ߞߟߏߜߍ ߡߊߦߌ߬ߘߊ߬ߣߍ߲ ߞߍ߫ ߡߍ߲ߞߊ߲ߡߊ߲ ߘߌ߫</strong> <br>
                    </p>


                </div>

                @if (!isset($randomSentence->sentence))
                    <p>Aucune phrase</p>
                @else
                    <!-- Custom Card Component with shadow and padding -->
                    <div style="font-size: 21px; box-shadow: 0px 7px 13px rgba(0, 0, 0, 0.2); padding: 15px; background-color: white; border-radius: 8px; width: 50%;"
                        class="mx-auto my-5">
                        <p style="text-align: right;" id="next_nko_sentence">{{ $randomSentence->sentence }}</p>
                        <div class="my-3">
                        <div id="loader"></div>
                        </div>
                    </div>
                    <!-- End Custom Card Component -->
                    <input type="hidden" id="sentence" name="sentence" value="{{ $randomSentence->sentence }}" />
                @endif
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
                        <p class="text-indication-of-audio-playing hide">ߡߊ߲߬ߞߊ߲ ߦߋ߫ ߓߐ߫ ߟߊ߫... <span>.</span><span>.</span><span>.</span></p>
                    </div>
                </div>
                <div class="overlay hide">
                    <div class="browser-not-supporting-audio-recording-box">
                        <p>ߞߊ߬ ߡߊ߲߬ߞߊ߲ ߟߊ߬ߞߎ߲߬ߘߎ߬، ߛߏ߯ߓߊߟߊ߲ ߟߊߓߊ߯ߙߊ߫ ߞߍ߫ ߞߙߑߙߐ߲ߡ ߝߍ߬ ߣߌ߲߬ ߡߊ߲߬ߞߊ߲߬ ߛߎ߲ߝߘߍ </p>
                        <button type="button" class="close-browser-not-supported-box">Ok.</button>
                    </div>
                </div>

                <audio controls class="audio-element hide">
                </audio>


            <div class="col-12 mx-auto mt-5 text-center" id="sending">...ߟߊߕߊ߯ߟߌ ߦߴߌߘߐ߫</div>
            <div class="col-12 mx-auto mt-5 text-center" id="recording">...ߟߊ߬ߞߎ߲߬ߘߎ߬ߟߌ ߦߴߌߘߐ߫<br /> ...ߊ߬ ߛߐ߲߬ߞߌ߫ ߞߵߊ߬ ߟߊߕߊ߯</div>

            </div>
        </section><!-- End Audio Record Section -->
    </main>

    <script src="{{ secure_asset('assets/js/audio-recording.js') }}"></script>
    <script src="{{ secure_asset('assets/js/index.js') }}"></script>


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> --}}

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

                        // Access the response data
                        const responseData = this.responseText;
                        console.log(responseData);

                        // If the response data is in JSON format, parse it
                        // const jsonData = JSON.parse(responseData);
                        // // console.log(jsonData);

                        // // this.
                        // document.getElementById('next_nko_sentence').textContent = jsonData['next_nko_sentence'];

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
    </script>
@endsection
