##Чтобы все заработало

* Для начала ставим node.js https://nodejs.org/en/
* Заходим в Git Bash, консоль винды или терминал для никсоводов, пишем там `npm install -g gulp-cli`
* Заходим в проект, открываем консоль в проекте, пишем `npm install`
* После установки пишем в консоли `gulp`
* Работаем в папке `app`
* Иконки сохраняем в папке `app/png-sprite`, названия файлов любые симолы [a-z, A-Z], для обращения к классу используем паттерн `.icon-название_файла`
* Скрипты в папке `app/js`
* Шрифты в папке `app/fonts`
* SASS-файлы создаем в папке `app/scss/app` и подключаем созданный файл через `@import` в файле `app/scss/app/home.scss`