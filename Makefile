VENDOR  = getherbie
NAME    = website
VERSION = 1.0

HOST     ?= myhost
USERNAME ?= myusername
PASSWORD ?= mypassword

default: run

run: build
	docker run --rm -p 8888:8888 --name $(VENDOR)-$(NAME) $(VENDOR)/$(NAME)

build: Dockerfile
	docker build -t $(VENDOR)/$(NAME) --rm .

deploy: build
	docker run --rm \
	$(VENDOR)/$(NAME) \
	/bin/sh -c 'cd /app; php vendor/bin/rocketeer deploy --host $(HOST) --username $(USERNAME) --password $(PASSWORD)'
