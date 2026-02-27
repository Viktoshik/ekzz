<h1>Авторизация</h1>
<form action="/login" method="post">
    @csrf
    <input type="email" name="email" placeholder="e-mail">
    <input type="password" name="password" placeholder="Пароль">
    <button>Войти</button>
    <a href="/login">Ещё нет аккаунта? Зарегистрироваться</a>
</form>
