@extends('layouts.template')

@section('content')
    <div class="container">
        @include('partials.headerscd')
    </div>



    <main id="main" style="background-color: #f6f9fe;">

        <!-- ======= Contact Section ======= -->
        <section class="contact">
            <div class="container" data-aos="fade-up">


                <div class="section-title">
                    <h2>Enregistrement vocal</h2>
                    <h3><span>Parlons N'KO <i class="fas fa-microphone" style="margin-right:5px; color: #3399FF;"></i></span>
                    </h3>
                    <p style="margint: 20px auto;"> <i class="fas fa-microphone"
                            style="margin-right:5px; color: #3399FF;"></i> Lire la phrase suivante :</p>
                </div>
                @if (!isset($randomSentence->sentence))
                    <p>Aucune phrase</p>
                @else
                    <div id="loader"></div>
                    <!-- Custom Card Component with shadow and padding -->
                    <div style="font-size: 21px; box-shadow: 0px 7px 13px rgba(0, 0, 0, 0.2); padding: 15px; background-color: white; border-radius: 8px; width: 50%;"
                        class="mx-auto my-5">
                        <p id="next_nko_sentence">{{ $randomSentence->sentence }}</p>
                    </div>
                    <!-- End Custom Card Component -->


                    <input type="hidden" id="sentence" name="sentence" value="{{ $randomSentence->sentence }}" />
                @endif
            </div>



            {{-- Circular Progress --}}
            {{-- <div class="d-flex justify-content-center"> --}}
                {{-- <div class="progressContainer"> --}}
                    {{-- <div class="progress-bar" id="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div> --}}
                {{-- </div> --}}
            {{-- </div> --}}

            <div class="container my-5">
                <div class="progress-container">
                    <div class="progress-bar" id="progress-bar"></div>
                </div>
            </div>




            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div id="recorder-block" class="microphone">
                    <i class="fa fa-microphone" id="icon-record-audio" onclick="recordAudio()"
                        style="cursor: pointer; color: #DC143C; font-size: 3.5em; line-height: 80px; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></i>
                </div>
            </div>

            <div class="col-12 mx-auto mt-5 text-center" id="sending">Envois encours ...</div>
            <div class="col-12 mx-auto mt-5 text-center" id="recording">Enregistrement encours...<br /> Clicquer pour
                envoyer</div>

            </div>
        </section><!-- End Contact Section -->
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        let recorder = null

        // Flag to track whether audio is being uploaded
        let isAudioUploading = false;
        var loader = document.getElementById('loader');
        var sending = document.getElementById('sending');
        var recording = document.getElementById('recording');
        var recorder_block = document.getElementById('recorder-block');
        var progressBar = document.getElementById('progress-bar');
        sending.style.display = 'none';
        recording.style.display = 'none';

        let currentRecordingTime = 0;

        // Set the maximum recording time (in seconds)
        const maxRecordingTime = 100;


        // Set the recording time limit in seconds
        // const maxTime = 30;


        // Function to disable the onclick event
        function disableOnClick() {
            var iconRecordAudio = document.getElementById('icon-record-audio');
            iconRecordAudio.removeAttribute('onclick');
        }

        // Function to enable the onclick event
        function enableOnClick() {
            var iconRecordAudio = document.getElementById('icon-record-audio');
            iconRecordAudio.setAttribute('onclick', 'recordAudio()');
        }

        // Update the progress bar during recording
        function updateProgressBar() {
            const progressInterval = setInterval(function () {
                // Check if the maximum recording time is reached
                if (currentRecordingTime >= maxRecordingTime) {
                    // Clear the progress interval
                    clearInterval(progressInterval);

                    // progressBar.style.width = progress;
                    recorder.stop().then(async function (result) {
                        // Access the audioBlob from the result
                        const audioBlob = result.audioBlob;



                        // stop the media recorder
                        // mediaRecorder.stop()
                        // Pause the progress bar animation

                        // Send the recorded audio to the server
                        await sendVoiceNote(audioBlob);



                        // change the icon back to microphone
                        document.getElementById("icon-record-audio").className =
                            "fa fa-microphone"

                        // reset the onclick listener so when again clicked, it will record a new audio
                        document.getElementById("icon-record-audio").onclick =
                            async function() {
                                recordAudio()
                        }
                    });

                    // Stop the recording and send the recorded audio
                    // progressBar.style.animationPlayState = "paused";
                } else{
                currentRecordingTime += 1; // Increment recording time
                const progress = (currentRecordingTime / maxRecordingTime) * 100;

                // Update the progress bar
                progressBar.style.width = progress + "%";
                progressBar.setAttribute("aria-valuenow", progress);

            }}, 1000); // Update every second
            // // Increase the width of the progress bar
            // const currentWidth = parseFloat(progressBar.style.width) || 0;
            // const newWidth = Math.min(currentWidth + (100 / maxRecordingTime), 100);
            // progressBar.style.width = newWidth + "%";

            // // Check if recording time has reached the maximum
            // currentRecordingTime += 1;
            // if (currentRecordingTime >= maxRecordingTime) {
            //     recorder.stop(); // Stop recording when the maximum time is reached
            // }
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





        function sendVoiceNote(base64) {
            // create an instance for AJAX
            var ajax = new XMLHttpRequest()

            isAudioUploading = true;
            disableOnClick();

            // Show loader while the file is being uploaded
            loader.style.display = 'block';
            recorder_block.style.display = 'none';
            sending.style.display = 'block';
            recording.style.display = 'none';


            // Disable the onClick event during the upload
            document.getElementById('icon-record-audio').style.color = '#999';


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
            // ajax.open("POST", "http://localhost:3000/sendVoiceNote", true)
            ajax.open("POST", "http://localhost:8000/api/enregistrement-audio-nko", true)

            // whenever the status of request is changed
            ajax.onreadystatechange = async function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {

                        // Access the response data
                        const responseData = this.responseText;

                        // If the response data is in JSON format, parse it
                        const jsonData = JSON.parse(responseData);
                        // console.log(jsonData);

                        // this.
                        document.getElementById('next_nko_sentence').textContent = jsonData['next_nko_sentence'];

                        // Simulating a successful file upload
                        setTimeout(() => {
                            // Show a custom notification
                            showNotification('Vocal envoyer avec succes !', 'success');
                        }, 100); // Simulated upload time (adjust as needed)

                        // Hide loader after upload is complete
                        loader.style.display = 'none';
                        recorder_block.style.display = 'block';
                        sending.style.display = 'none';

                        isAudioUploading = false;
                        // Disable the onClick event during the upload
                        document.getElementById('icon-record-audio').style.color = '#DC143C';

                        // Re-enable the onClick event after the upload is complete
                        enableOnClick();



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
                        recorder_block.style.display = 'block';
                        sending.style.display = 'none';

                        // Disable the onClick event during the upload
                        document.getElementById('icon-record-audio').style.color = '#DC143C';

                        // Re-enable the onClick event after the upload is complete
                        enableOnClick();


                        // console.log(this.responseText)
                    }
                }
            }

            ajax.send(formData)
        }



        function doRecordAudio() {
            console.log("doRecordAudio");
            recording.style.display = 'block';


            return new Promise(function(resolve) {
                // get user audio media

                navigator.mediaDevices.getUserMedia({
                        audio: true
                    })
                    .then(function(stream) {
                        // create media recorder object
                        const mediaRecorder = new MediaRecorder(stream)

                        // save audio chunks in an array
                        const audioChunks = []
                        mediaRecorder.addEventListener("dataavailable", function(event) {
                            audioChunks.push(event.data)
                        })

                        // create a start function
                        const start = function() {

                            console.log("starting...");
                            // when recording starts, set the icon to stop
                            document.getElementById("icon-record-audio").className = "fa fa-stop-circle"

                            // Reset the progress bar and the data array
                            progressBar.style.width = "0%";
                            // Reset the recording time
                            currentRecordingTime = 0;

                            // Update the progress bar periodically
                            progressInterval = setInterval(updateProgressBar, 1000);
                            recordingData = [];

                            // on icon clicked
                            document.getElementById("icon-record-audio").onclick = async function() {
                                // stop the recorder
                                if (recorder != null) {
                                    const audio = await recorder.stop()

                                    // play the audio
                                    // audio.play()

                                    // get audio stream
                                    const reader = new FileReader()
                                    reader.readAsDataURL(audio.audioBlob)
                                    reader.onloadend = function() {
                                        // get base64
                                        let base64 = reader.result

                                        // get only base64 data
                                        base64 = base64.split(',')[1]

                                        // send base64 to server to save
                                        sendVoiceNote(base64)
                                    }
                                }
                            }

                            // start media recorder
                            mediaRecorder.start()


                            // Start updating the progress bar
                            updateProgressBar();
                        }


                        // create a stop function
                        const stop = function() {

                            console.log("stoping...");

                            return new Promise(function(resolve) {

                                // on recording stop listener
                                mediaRecorder.addEventListener("stop", function() {

                                    // change the icon back to microphone
                                    document.getElementById("icon-record-audio").className =
                                        "fa fa-microphone"

                                    // reset the onclick listener so when again clicked, it will record a new audio
                                    document.getElementById("icon-record-audio").onclick =
                                        async function() {
                                            recordAudio()
                                        }

                                    // convert the audio chunks array into blob
                                    const audioBlob = new Blob(audioChunks)

                                    // create URL object from URL
                                    const audioUrl = URL.createObjectURL(audioBlob)

                                    // create an audio object to play
                                    const audio = new Audio(audioUrl)
                                    const play = function() {
                                        // audio.play()
                                    }

                                    // send the values back to the promise
                                    resolve({
                                        audioBlob,
                                        play
                                    })
                                })

                                // stop the media recorder
                                mediaRecorder.stop()
                                // Pause the progress bar animation
                                progressBar.style.animationPlayState = "paused";
                                // Stop the progress bar update
                                clearInterval(progressInterval);

                            })
                        }

                        // send the values back to promise
                        resolve({
                            mediaRecorder,
                            start,
                            stop
                        })
                    })
            })
        }


        // function to record audio
        async function recordAudio() {

            console.log("recordAudio");
            // get permission to access microphone
            navigator.permissions.query({
                    name: 'microphone'
                })
                .then(function(permissionObj) {
                    console.log(permissionObj.state)
                })
                .catch(function(error) {
                    console.log('Got error :', error);
                })

            // get recorder object
            recorder = await doRecordAudio()

            // start audio
            recorder.start()
        }
    </script>
@endsection
