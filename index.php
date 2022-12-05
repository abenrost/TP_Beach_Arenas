
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Beach Football</title>
</head>
<body>
    <header>
        
        <nav>
            <div>
                <img src="./assets/logo.png" alt="Logo un ballon de football ailé et auréolé">
            </div>
            <ul>
                <li><a href="">Discover</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">How it Works</a></li>
            </ul>
            <a id="btn" href="">Login</a>
        </nav>
        <section>
            <article>
                <h2>Make New Friends over</h2>
                <h1>Beach Football</h1>
                <p>Challenge your friends and play together a game of beach Football at your nearest beach.</p>
                <form>
                    <select name="users" onchange="showUser(this.value)">
                        <option value="">&#9992; Search Beach Arenas:</option>
                        <option value="1">&#9917; Costa del Sol, El Salvador</option>
                        <option value="2">&#9917; Nazaré, Portugal</option>
                        <option value="3">&#9917; Figueira da Foz, Portugal</option>
                        <option value="4">&#9917; Alajuela, Costa Rica</option>
                        <option value="5">&#9917; Saly, Senegal</option>
                        <option value="6">&#9917; Virginia Beach, USA</option>
                        <option value="7">&#9917; Rio de Janeiro, Brazil</option>
                        <option value="8">&#9917; Chisinau, Moldova</option>
                        <option value="9">&#9917; Dubai, UAE</option>
                    </select>
                </form>
                <div id="txtHint"><b></b></div>
                <span><b>Popular Beach Arenas:</b> Virginia, California, Texas</span>
            </article>
        </section>
        <img id="palm" src="./assets/tree.png" alt="">
    </header>
    <script src="./script.js"></script>
</body>
</html>