<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

#Atte
概要：社員の勤怠状況を管理、確認するためのアプリ
< --- トップ画面の画像 --->

##作成した目的
利用する企業での人事評価が目的。社員が日々の勤怠を入力、合わせて人事部もそれぞれの勤怠を確認できるように作成。

##アプリケーションURL

##他のリポジトリ

##機能一覧
―会員登録機能
―メール認証機能
―ログイン機能
―ログアウト機能
―勤務開始機能
―勤務終了機能
―自動更新機能
―休憩開始機能
―休憩終了機能
―日付別勤怠情報取得機能
―ページネーション機能
―ユーザー一覧表示機能
―ユーザー別勤怠表表示機能

##使用技術（実行環境）
laravel:8.83.8

version: '3.8'
nginx:1.21.1
mysql:8.0.26


##テーブル設計

users_table					
カラム名 型	     PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
user-id	 int	 〇		                    〇	
name	 char	 		                    〇	
email	 varchar		        〇          〇	
password varchar			                〇	
					
works_table					
カラム名	型	  PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
time_id	    int	  〇		                〇	
user_id	    int			                    〇	
date	    date			                〇	
start_time	time				
end_time	time				

rests_table					
カラム名	型	  PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
rest_id	    int	  〇		                〇	
work_id	    int			                    〇	
start_time	time				
end_time	time

##ER図
/home/hosomitadashi/coachtech/laravel/Atte/src/.drawio.png

＃　環境構築

##　アカウントの種類

