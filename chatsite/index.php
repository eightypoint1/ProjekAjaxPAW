<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Chat Interface</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 90vh;
        }
        .chat-container {
            width: 500px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
        }
        .chat-header {
            padding: 10px;
            background-color: #eee;
            border-bottom: 1px solid #ccc;
            font-weight: bold;
            text-align: center; /* Adjust if the actual header is left-aligned */
        }
        .chat-messages {
            height: 300px; /* Fixed height for scrollable area */
            overflow-y: scroll;
            padding: 10px;
            background-color: #f9f9f9;
            border-bottom: 1px solid #eee;
        }
        .chat-message {
            margin-bottom: 5px;
            line-height: 1.4;
        }
        .chat-message span.timestamp {
            color: #888;
            margin-right: 5px;
        }
        .chat-message span.user {
            font-weight: bold;
        }
        .chat-input-area {
            padding: 10px;
            border-top: 1px solid #ccc;
            background-color: #eee;
        }
        .input-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .input-row label {
            margin-right: 5px;
            font-weight: bold;
        }
        .input-row input[type="text"] {
            flex-grow: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .message-input {
            display: flex;
        }
        .message-input input[type="text"] {
            flex-grow: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-right: 5px;
        }
        .message-input button {
            padding: 8px 15px;
            background-color: #e0e0e0; /* Similar to the button color in the image */
            border: 1px solid #ccc;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
        }
        .message-input button:hover {
            background-color: #d0d0d0;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            Penweb - Chat Sederhana
        </div>

        <div class="chat-messages">
            <div class="chat-message"><span class="timestamp">[16:14]</span> <span class="user">Buce:</span> Halo gaes</div>
            <div class="chat-message"><span class="timestamp">[16:15]</span> <span class="user">Rafi:</span> Halo pak</div>
            <div class="chat-message"><span class="timestamp">[16:16]</span> <span class="user">Nada:</span> Halo pak</div>
            <div class="chat-message"><span class="timestamp">[16:16]</span> <span class="user">Alvianto:</span> Hafizh</div>
            <div class="chat-message"><span class="timestamp">[16:16]</span> <span class="user">Hafizh:</span> Apaa?</div>
            <div class="chat-message"><span class="timestamp">[16:19]</span> <span class="user">Alvianto:</span> Gak jadi</div>
            </div>

        <div class="chat-input-area">
            <div class="input-row">
                <input type="text" placeholder="Nama Anda" value="Nama Anda">
            </div>
            <div class="message-input">
                <input type="text" placeholder="Ketik pesan...">
                <button type="submit">Kirim</button>
            </div>
        </div>
    </div>
</body>
</html>