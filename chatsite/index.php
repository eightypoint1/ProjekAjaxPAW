<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat PAW</title>
    <!-- white-space ini diperlukan, kalau tidak nanti chatnya langsung ke samping chat log yang lain -->
    <style>
        #chat-box {
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div>

        <div id="chat-box">
        </div>

        <div>
            <form id="chat" method="post" action="chattofile.php">
                <input type="text" name="username" placeholder="Nama Anda" required>
                <br> <input type="text" name="message" placeholder="Ketik pesan..." required>
                <br> <button type="submit">Kirim</button>
            </form>
        </div>
        
    </div>
    <script>
        // AJAX
        // Fungsi ini akan mengambil message dari filetochat.php, yang merupakan konten message di chat.txt
        const loadMessages = async () => {
            try {
                const response = await fetch('filetochat.php');
                const teks = await response.text();
                // Ubah konten div chat box menjadi konten hasil text
                document.getElementById('chat-box').textContent = teks;
            } catch (error) {
                console.error("Error loading messages:", error);
            }
        };

        loadMessages();
        setInterval(loadMessages, 1000);
    </script>
</body>

</html>