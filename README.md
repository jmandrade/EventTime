EventTime displays the date and hour of an "event" (liveblog, webcast, etc.) at the user's local time.

There are two sections for the app: Event creation and event display.

index.php and resultado.php create the event, while fecha.php displays the event.

### Local development

Create container
```
docker build -t event . -f docker/Dockerfile.local
```

Start container
```
docker run --name event -p 80:80 -v `pwd`/:/var/www/html/ event
```
