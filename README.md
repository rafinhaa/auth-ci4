<h4 align="center">
    <br><br>
    <p align="center">
      <a href="#-about">About</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-technologies">Technologies</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-how-to-run-the-project">Run</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-info">Info</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-changelog">Changelog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-license">License</a>
  </p>
</h4>
<h1 align="center">
  <img width="600" style="border-radius: 10px" height="auto" alt="Screenshot" title="Screenshot" src="docs/images/Screenshot_1.png" />
  <div style="display: flex; flex-direction: row;">
    <img width="400" style="border-radius: 10px" height="auto" alt="Screenshot" title="Screenshot" src="docs/images/Screenshot_2.png" />
    <img width="400" style="border-radius: 10px" height="auto" alt="Screenshot" title="Level Up" src="docs/images/Screenshot_3.png" />
  <div>
</h1>

## 🔖 About
O auth-ci4 é uma aplicação criado com codeigniter 4, permite o registro e a autenticação de usuários. Baseado no vídeo [CodeIgniter 4 Authentication](https://www.youtube.com/watch?v=vKFcpQo-h-Q)

## 🚀 Technologies
- [PHP](https://php.net/)
- [CodeIgniter](https://codeigniter.com/)

## 🏁 How to run the project
#### Clone the repository
```bash
git clone https://github.com/rafinhaa/auth-ci4.git
cd auth-ci4
```
#### Install dependencies
```bash
composer install
```
#### Execute migrations
```bash
php spark migrate
```
#### Execute seeds
```bash
php spark db:seed UsersSeeder
```

## ℹ️ Info
#### Credentials
- Usuário: admin@admin.com
- Senha:   password

## 📄 Changelog
##### v0.0.7
- Create View dashboard with name index
- Finish logic in View dashboard
- Create Filter AuthCheckFilter
- Add filter alias for AuthCheckFilter to AuthCheck
- Add route group form Filter AuthCheck
- Create method profile in Controller dashboard
- Create View profile
- Create Filter AlreadyLoggedInFilter
- Add filter alias for AlreadyLoggedInFilter to AlreadyLoggedIn
- Add route group form Filter AlreadyLoggedIn
- Update README.md
##### v0.0.6
- Finished logic to login user in method check 
- Create Controller dashboard
##### v0.0.5
- Create message for successful or fail registration in View register
- Create Library hash
- Create method make in Library hash
- Create method check in Controller auth
##### v0.0.4
- Finished form validation in View register
- Finished logic to register one user
##### v0.0.3
- Create method register in Controller auth
- Create View register
- Create method save in Controller auth
- Create Model UsersModel
- Create Helper Form_helper
##### v0.0.2
- Create migration users
- Create Controller auth
- Create View login
- Downloaded bootstrap files in public/bootstrap
##### v0.0.1 -> v0.0.1b
- Update README.md

## 📝 License
[MIT](LICENSE)

**Free Software, Hell Yeah!**