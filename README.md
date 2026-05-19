# PHP App with Docker and CI/CD

Это тестовое задание реализует автоматическую сборку и деплой PHP-приложения на удалённый сервер с использованием Docker, Docker Compose и GitHub Actions.

## Локальный запуск
1. Клонировать репозиторий
2. Выполнить `docker-compose up -d`
3. Открыть `http://localhost`

## Подготовка сервера (однократно)
- Установить Docker и Docker Compose
- Добавить SSH-ключ для доступа из GitHub Actions
- Убедиться, что пользователь имеет права на запуск Docker (добавить в группу docker)

## CI/CD (GitHub Actions)
При каждом пуше в ветку `main` происходит:
1. Сборка Docker-образа PHP-приложения (из docker/Dockerfile).
2. Публикация образа в Docker Hub.
3. Копирование файлов деплоя (docker-compose.yml и конфиг nginx) на сервер.
4. Обновление контейнеров – удаление старых, скачивание нового образа и запуск.

Приложение становится доступным по http://<IP-сервера>.

## Необходимые GitHub Secrets
`DOCKER_USERNAME, DOCKER_PASSWORD` - логин и пароль (лучше токен) для доступа в Docker Hub

`SERVER_HOST, SERVER_USER, SERVER_SSH_KEY` - доступ на сервер
