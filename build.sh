#!/bin/bash

docker build -t php-docker-playground:latest -f Dockerfile .
docker run -it --rm -p 8184:80 php-docker-playground:latest
