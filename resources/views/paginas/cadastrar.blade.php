<x-layout title="Formulário Login">
    <div class="container">
        <!-- stylesheet -->

        <style>
            body{
                background-color: #2c5045;
            }
            .auth-container {
                background-color: #2c5045;
                border-radius: 5px;
                padding: 2rem;
            }

            .auth-card {
                background-color: #fff;
                border-radius: 5px;
                padding: 2rem;
            }

            .auth-form {
                max-width: 30rem;
            }

            .auth-title {
                color: #2c3e50;
                font-weight: bold;
            }

            .auth-label {
                color: #2c3e50;
                font-weight: bold;
            }

            .auth-input {
                background-color: #f1f1f1;
                border: none;
                border-radius: 5px;
                padding: 0.5rem;
            }

            .auth-button {
                background-color: #27ae60;
                border: none;
                border-radius: 5px;
                color: #fff;
                padding: 0.5rem;
            }

            .auth-button:hover {
                background-color: #2ecc71;
            }

            .auth-link {
                color: #27ae60;
                text-decoration: none;
            }

            .auth-link:hover {
                text-decoration: underline;
            }
        </style>
    </div>
    <br>
    <div class="container mt-5 auth-container">
        <div class="row justify-content-center">
            <div class="col-md-4 auth-card">
                <form action="login/salvar" class="auth-form">
                    @csrf
                    <h2 class="text-center mb-4 auth-title">Entrar</h2>
                    <div class="mb-3">
                        <label for="nome" class="form-label auth-label">Nome</label>
                        <input type="nome" class="form-control auth-input" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label auth-label">email</label>
                        <input type="email" class="form-control auth-input" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label auth-label">Senha</label>
                        <input type="password" class="form-control auth-input" id="senha" name="senha" required>
                    </div>

                    <div class="d-grid gap-2">
                        <a href="/index" class="btn btn-outline-light auth-button">
                            Cadastrar
                        </a>
                    </div>

                    <div class="text-center mt-3">
                        <p class="text-muted">Já possui uma conta? <a href="/login" class="auth-link">Entrar</a>
                        </p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>