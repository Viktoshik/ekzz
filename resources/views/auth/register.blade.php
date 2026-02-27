<h1>Регистрация</h1>
<form action="/register" method="post">
    @csrf
    <input type="text" name="name" placeholder="Имя">
    <input type="email" name="email" placeholder="e-mail">
    <input type="password" name="password" placeholder="Пароль">
    <button>Зарегистрироваться</button>
    <a href="/login">Уже есть аккаунт? Войти</a>
</form>
