<div class="min-h-screen bg-white">
    <style>
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

        /* Kontejner koji sve drži u koloni na sredini */
        .login-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 50px;
            width: 100%;
        }

        /* Sama forma mora biti flex-kolona */
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
            height: 70px !important;
            text-align: center;
            font-style: italic;
            font-weight: bold;
            font-family: 'Comic Sans MS';
            margin-bottom: 20px;
            font-size: 20px;
            box-sizing: border-box;
        }

        .forgot-pass {
            font-family: 'Comic Sans MS';
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            color: black;
            align-self: flex-end; /* Ovo ga gura skroz desno u odnosu na inpute */
            margin-bottom: 30px;
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
            transition: 0.2s;
        }

        .wolley-submit:hover {
            background-color: #ff9b90;
            transform: scale(1.05);
        }
    </style>

    <div class="wolley-header">
        <div class="wolley-logo">Butik Wolley</div>
    </div>

    <div class="login-wrapper">
        <form method="POST" action="{{ route('login') }}" class="wolley-form">
            @csrf

            <input id="email" type="email" name="email" class="wolley-input" placeholder="Korisnicko ime/e-mail" required autofocus />

            <input id="password" type="password" name="password" class="wolley-input" placeholder="Password" required />

            <a class="forgot-pass" href="{{ route('password.request') }}">Zaboravljena lozinka</a>

            <button type="submit" class="wolley-submit">Prijavi se</button>
        </form>
    </div>
</div>
