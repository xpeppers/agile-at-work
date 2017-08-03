agile@work
===
A full-day conference about real world experiences on applied Agile methodologies, DevOps principles and Cloud infrastructure transformations. You will attend practical workshops, training sessions and talks of case studies.

### run environment locally (ruby)
```
bundle install
bundle exec jekyll serve --incremental --port <port>

# to start php demo scripts use a php server instead
cd php
php -S 0.0.0.0:4044
```

### run environment locally (docker:fish)
```
docker build --rm --tag agile-at-work (pwd)
docker run -itv (pwd):/wd -p 4000:80 --name agile-at-work agile-at-work
```

### run environment locally (docker:sh, bash, zsh)
```
docker build --rm --tag agile-at-work $(pwd)
docker run -itv $(pwd):/wd -p 4000:80 --name agile-at-work agile-at-work
```
