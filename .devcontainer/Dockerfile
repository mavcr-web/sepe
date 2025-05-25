# Create image based on the official Node 6 image from dockerhub
FROM php:8.4.8RC1-zts-alpine3.21

RUN apk add git postgresql16-client openssh-client

RUN mkdir -p /api

ENV PATH $PATH:/usr/local/bin/php

WORKDIR /api
