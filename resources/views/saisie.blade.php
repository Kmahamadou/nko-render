<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Saisie de Texte</title>
</head>
<body>
@extends("layouts.layout4")

@section("content")

<div class="center-container">
<p>Veuillez enoncer la phrase suivante : {{ $randomSentence->sentence }} </p>
    <form method="post" action="/saisiepost">
        @csrf
        <div style="text-align: center; margin-left: 460px; margin-top: 100px;">
    <div class="microphone">
        <i class="fa fa-microphone" id="icon-record-audio" onclick="recordAudio()" style="cursor: pointer; color: #DC143C; font-size: 1.5em; line-height: 80px; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"></i>
    </div>
</div>


        <input type="hidden" name="base64" id="audioData" value="">
        <input type="hidden" name="text" id="text" value="{{ $randomSentence->sentence }}">
    </form>
</div>        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script>
    let recorder = null

    function sendVoiceNote(base64) {
        // create an instance for AJAX
        var ajax = new XMLHttpRequest()
        

        var text = document.getElementById("text");
        var textValue = text.value;
        // send base64 string to server
        var valeurs = [base64, textValue];
        const formData = new FormData();


        for (let index = 0; index < valeurs.length; index++) {
            const element = valeurs[index];

            formData.append("valeur"+index,valeurs[index])            
        }
 
        // set request method as POST, set URL and set asynchronous to true
        // ajax.open("POST", "http://localhost:3000/sendVoiceNote", true)
        ajax.open("POST", "http://localhost:8000/api/saveaudio", true)
 
        // whenever the status of request is changed
        ajax.onreadystatechange = async function() {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    console.log(this.responseText)
                }
 
                if (this.status == 500) {
                    console.log(this.responseText)
                }
            }
        }
 
        ajax.send(formData)
    }



       
 
    function doRecordAudio() {
        console.log("doRecordAudio");
        return new Promise(function (resolve) {
            // get user audio media
            navigator.mediaDevices.getUserMedia({
                audio: true
            })
            .then(function (stream) {
                // create media recorder object
                const mediaRecorder = new MediaRecorder(stream)
 
                // save audio chunks in an array
                const audioChunks = []
                mediaRecorder.addEventListener("dataavailable", function (event) {
                    audioChunks.push(event.data)
                })
 
                // create a start function
                const start = function () {
                    
        console.log("start");
                    // when recording starts, set the icon to stop
                    document.getElementById("icon-record-audio").className = "fa fa-stop-circle"
 
                    // on icon clicked
                    document.getElementById("icon-record-audio").onclick = async function() {
                        // stop the recorder
                        if (recorder != null) {
                            const audio = await recorder.stop()
 
                            // play the audio
                            audio.play()
 
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
                }
 
                // create a stop function
                const stop = function () {
                    
        console.log("stop");
                    return new Promise(function (resolve) {
 
                        // on recording stop listener
                        mediaRecorder.addEventListener("stop", function () {
 
                            // change the icon back to microphone
                            document.getElementById("icon-record-audio").className = "fa fa-microphone"
 
                            // reset the onclick listener so when again clicked, it will record a new audio
                            document.getElementById("icon-record-audio").onclick = async function() {
                                recordAudio()
                            }
 
                            // convert the audio chunks array into blob
                            const audioBlob = new Blob(audioChunks)
 
                            // create URL object from URL
                            const audioUrl = URL.createObjectURL(audioBlob)
 
                            // create an audio object to play
                            const audio = new Audio(audioUrl)
                            const play = function () {
                                audio.play()
                            }
 
                            // send the values back to the promise
                            resolve({
                                audioBlob,
                                play
                            })
                        })
 
                        // stop the media recorder
                        mediaRecorder.stop()
                    })
                }
 
                // send the values back to promise
                resolve({
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
        navigator.permissions.query({name: 'microphone'})
            .then(function (permissionObj) {
                console.log(permissionObj.state)                
            })
            .catch(function (error) {
                console.log('Got error :', error);
            })
 
        // get recorder object
        recorder = await doRecordAudio()
 
        // start audio
        recorder.start()
    }
    
</script>
@endsection
</body>
</html>
