<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div id="global">
        <header>
            <h1>Login</h1>
        </header>
        <main>
            <form   method="post" action="autenticador.php"  >
                <label>Usuário:
                <input nome="user" type="text" />
                </label>

                <label>Senha:
                <input nome="pass" type="password" />
                </label>

                <button type="submit">Entrar</button>
            </form>
        </main>
    </div>
    
</body>
</html>
