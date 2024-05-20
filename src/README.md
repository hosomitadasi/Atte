<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

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

