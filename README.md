# PHP App with Docker and CI/CD

## Локальный запуск
1. Клонировать репозиторий
2. Выполнить `docker-compose up -d`
3. Открыть `http://localhost`

## Подготовка сервера (однократно)
- Установить Docker и Docker Compose
- Добавить SSH-ключ для доступа из GitHub Actions
- Убедиться, что пользователь имеет права на запуск Docker (добавить в группу docker)

## CI/CD (GitHub Actions)
При каждом пуше в `main`:
1. Собирается PHP-образ и пушится в Docker Hub
2. Копируются необходимые файлы на сервер
3. На сервере разворачивается docker-compose с PHP-приложением и nginx веб-сервером

## Необходимые GitHub Secrets
`DOCKER_USERNAME, DOCKER_PASSWORD` - логин и пароль (лучше токен) для доступа в Docker Hub

`SERVER_HOST, SERVER_USER, SERVER_SSH_KEY` - доступ на сервер
