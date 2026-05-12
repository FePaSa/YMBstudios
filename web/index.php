<?php

$error = "";
$success = "";

$base_url = "http://ymbstudios.cat/";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["demo"])) {
    $target_dir = "uploads/";
    $nombre_limpio = str_replace(" ", "_", $_FILES["demo"]["name"]);
    $target_file = $target_dir . $nombre_limpio;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($fileType != "mp3" && $fileType != "wav") {
        $error = "Error: Només es permeten fitxers <strong>MP3 o WAV</strong>.";
    }

    elseif ($_FILES["demo"]["size"] > 50000000) {
        $error = "Error: El fitxer és massa gran (màxim <strong>50MB</strong>).";
    }

    else {
        if (move_uploaded_file($_FILES["demo"]["tmp_name"], $target_file)) {

            $file_url = $base_url . "uploads/" . $nombre_limpio;

    
            $to = "polanskioficial@gmail.com";
            $subject = "Nou fitxer pujat a YMB Studios";
            $message = "S'ha pujat un nou fitxer al projecte YMB Studios:\n\n";
            $message .= "Nom del fitxer: " . $_FILES["demo"]["name"] . "\n";
            $message .= "Mida: " . round($_FILES["demo"]["size"] / 1024 / 1024, 2) . " MB\n";
            $message .= "Tipus: " . strtoupper($fileType) . "\n";
            $message .= "\nEnllaç directe per descarregar: " . $file_url . "\n";
            $message .= "\nSi el enllaç no funciona, prova a copiar-lo i obrir-lo en un navegador.";

            $headers = "From: YMB Studios <ymbstudios@ymbstudios.cat>\r\n";
            $headers .= "Reply-To: polanskioficial@gmail.com\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            mail($to, $subject, $message, $headers);

            $success = "Fitxer pujat correctament!";
        } else {
            $error = "Error al pujar el fitxer. Prova de nou.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YMB Studios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav>
            <div class="logo">YMB Studios</div>
            <ul>
                <li><a href="#inici">Inici</a></li>
                <li><a href="#projecte">Projecte</a></li>
                <li><a href="#pujar">Pujar Demo</a></li>
                <li><a href="#contacte">Contacte</a></li>
            </ul>
        </nav>
    </header>

    <section id="inici" class="hero">
        <h1>Young Money Boys Studios</h1>
        <p>Plataforma de streaming per a artistes emergents</p>
    </section>

    <section id="projecte" class="section">
        <h2>Què és YMB Studios?</h2>
        <p>
            Un projecte on 12-13 artistes conviuen durant 1 mes en una casa amb 3 estudis de música professionals.
            Transmeten el seu procés creatiu en directe a YouTube/Twitch.
        </p>

        <div class="features">
            <div class="feature">
                <h3>Streaming Professional</h3>
                <p>Transmissió en directe amb qualitat 1080p/60fps.</p>
            </div>
            <div class="feature">
                <h3>3 Estudis de Música</h3>
                <p>Equipament professional: DAWs, micròfons i targetes de so.</p>
            </div>
            <div class="feature">
                <h3>Comunitat</h3>
                <p>Interacció amb l'audiència i col·laboració entre artistes.</p>
            </div>
        </div>
    </section>

    <section id="pujar" class="section">
        <h2>Pujar la teva Demo</h2>
        <p>Envía'ns la teva cançó en format MP3 o WAV.</p>

        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data">
            <input type="file" name="demo" accept=".mp3,.wav" required>
            <button type="submit">Pujar Demo</button>
        </form>

        <div class="requirements">
            <p><strong>Requisits:</strong></p>
            <p>- Format: MP3 o WAV</p>
            <p>- Mida màxima: 50MB</p>
            <p>- Nom de l'arxiu sense espais</p>
        </div>
    </section>

    <section id="contacte" class="section">
        <h2>Contacte</h2>
        <p>Mail: polanskioficial@gmail.com</p>
        <p>GitHub: https://github.com/FePaSa/YMBstudios</p>
    </section>

    <footer>
        <p>&copy; 2026 YMB Studios | Pol Sánchez Muñoz & Ferran Palau</p>
    </footer>
</body>
</html>