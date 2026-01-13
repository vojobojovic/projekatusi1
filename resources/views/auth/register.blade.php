<div class="min-h-screen bg-white">
    <style>
        /* Osnovni reset i fontovi */
        body { margin: 0; padding: 0; }

        .wolley-header {
            background-color: #ffc0b0;
            padding: 40px 60px;
            border-bottom: 5px solid black;
            width: 100%;
            box-sizing: border-box;
        }

        .wolley-logo {
            font-family: 'Comic Sans MS', cursive;
            font-size: 50px;
            font-weight: bold;
            color: black;
        }

        /* Glavni kontejner za centriranje */
        .register-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 40px;
            width: 100%;
        }

        .reg-title {
            font-family: 'Comic Sans MS';
            font-size: 35px;
            font-weight: bold;
            font-style: italic;
            margin-bottom: 30px;
        }

        /* Forma u koloni */
        .wolley-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 500px;
        }

        .wolley-input {
            background-color: #d1d5db !important;
            border: 2px solid #9ca3af !important;
            width: 100% !important;
            height: 60px !important;
            text-align: center;
            font-style: italic;
            font-weight: bold;
            font-family: 'Comic Sans MS';
            margin-bottom: 15px;
            font-size: 18px;
            box-sizing: border-box;
        }

        .wolley-submit {
            background-color: #ffada3;
            width: 300px;
            height: 70px;
            border: 2px solid black;
            font-family: 'Comic Sans MS';
            font-weight: bold;
            font-size: 24px;
            cursor: pointer;
            margin-top: 20px;
            transition: 0.2s;
        }

        .wolley-submit:hover {
            background-color: #ff9b90;
            transform: scale(1.05);
        }

        .login-link {
            margin-top: 20px;
            font-family: 'Comic Sans MS';
            text-decoration: underline;
            color: gray;
        }
    </style>

    <div class="wolley-header">
        <div class="wolley-logo">Butik Wolley</div>
    </div>

    <div class="register-wrapper">
        <h2 class="reg-title">Registruj se</h2>

        <form method="POST" action="{{ route('register') }}" class="wolley-form">
            @csrf

            <input id="name" type="text" name="name" class="wolley-input" placeholder="Ime" required autofocus />

            <input id="email" type="email" name="email" class="wolley-input" placeholder="E-mail" required />

            <input id="password" type="password" name="password" class="wolley-input" placeholder="Lozinka" required />

            <input id="password_confirmation" type="password" name="password_confirmation" class="wolley-input" placeholder="Potvrda lozinke" required />

            <button type="submit" class="wolley-submit">Registruj se</button>

            <a href="{{ route('login') }}" class="login-link">Već imate nalog? Prijavite se</a>
        </form>
    </div>
</div>
