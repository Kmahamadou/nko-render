<div class="container">
    <div class="progress">
        <div class="progress-bar" id="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <button id="record-button" onclick="startRecording()">Start Recording</button>
    <audio id="audio-player" controls></audio>
</div>
<script>
    // Get the elements
    const recordButton = document.getElementById("record-button");
    const progressBar = document.getElementById("progress-bar");
    const audioPlayer = document.getElementById("audio-player");

    // Set the recording time limit in seconds
    const maxTime = 30;

    // Initialize the media recorder and the data array
    let mediaRecorder;
    let recordingData = [];

    // Define a function to start recording
    function startRecording() {
        // Disable the record button
        recordButton.disabled = true;

        // Reset the progress bar and the data array
        progressBar.style.width = "0%";
        progressBar.setAttribute("aria-valuenow", "0");
        recordingData = [];

        // Request the user's permission to access the microphone
        navigator.mediaDevices.getUserMedia({ audio: true })
            .then(function(stream) {
                // Create a new media recorder instance
                mediaRecorder = new MediaRecorder(stream);

                // Add an event listener for when data is available
                mediaRecorder.addEventListener("dataavailable", function(event) {
                    // Push the data to the array
                    recordingData.push(event.data);
                });

                // Add an event listener for when the recording stops
                mediaRecorder.addEventListener("stop", function() {
                    // Create a blob from the data array
                    const blob = new Blob(recordingData, { type: "audio/ogg" });

                    // Create a URL for the blob
                    const url = URL.createObjectURL(blob);

                    // Set the audio player's source to the URL
                    audioPlayer.src = url;

                    // Enable the record button
                    recordButton.disabled = false;
                });

                // Start the media recorder
                mediaRecorder.start();

                // Update the progress bar every second
                let currentTime = 0;
                let interval = setInterval(function() {
                    // Increment the current time
                    currentTime++;

                    // Calculate the percentage of the progress bar
                    let percentage = Math.round(currentTime / maxTime * 100);

                    // Update the progress bar's style and attributes
                    progressBar.style.width = percentage + "%";
                    progressBar.setAttribute("aria-valuenow", percentage);

                    // Check if the current time has reached the limit
                    if (currentTime >= maxTime) {
                        // Stop the media recorder
                        mediaRecorder.stop();

                        // Stop the interval
                        clearInterval(interval);
                    }
                }, 1000);
            })
            .catch(function(error) {
                // Log the error
                console.error(error);

                // Enable the record button
                recordButton.disabled = false;
            });
    }
</script>
