<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krembangan Care </title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('img/polsek logo.jpg') }}" type="image/x-icon">
</head>
<body>
    <div class="wrapper">
        <div class="welcome-text">
        <h3>Chatbot Pelayanan Polsek Krembangan Surabaya</h3><br>
        <p>Chatbot ini hanya untuk layanan informasi yang ada di Polsek Krembangan Surabaya</p>
        <br>Informasi lebih lanjut silahkan hubungi dinomor 031-7315570
        </div>
    </div>
        <iframe
        allow="microphone;"
        width="300"
        height="300"
        src="https://console.dialogflow.com/api-client/demo/embedded/d00dd3bc-6e44-4d24-9e32-9b2f7d0050aa">
        </iframe>
            <br><df-messenger
                intent="welcome"
                chat-title="SpkBot"
                agent-id="spkbot-bhwp"
                language-code="id"
            ></df-messenger>
    </div>
</body>
</html>
