## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## How to

1. Php artisan serve
2. php artisan make:migration karyawan
3. php artisan make:model karyawan -m
4. php artisan migrate
5. php artisan tingker
6. php artisan make:Controller BerandaController -r
7. php artisan make:Controller loginController -
8. php artisan make:middleware CekLevel



php artisan tinker
>>> $p = new \App\pengguna
=> App\Pengguna {#3214}
>>> $p->name = "Aldi Setia"
=> "Aldi Setia"
>>> $p->email = "aldi@gmail.com"
=> "aldi@gmail.com"
>>> $p->password = bcrypt('12345')
=> "$2y$10$GZ771cP7sn1Qqj5MLA42d.XJsPtQU9w6ylsZRnkpuR27uF6CpNQ.C"
>>> $p->remember_token = Str::random(60)
=> "FjYbvKdJEc7WQqxEm4iFK74XVI1adgzKlTak3tEgYwclDiioUo5a16WdcJiK"
>>> $p->save()