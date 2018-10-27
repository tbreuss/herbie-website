VENDOR  = getherbie
NAME    = website
VERSION = 1.0

HOST     ?= host
USERNAME ?= username
PASSWORD ?= password

REGISTRY_USER     ?= user
REGISTRY_PASSWORD ?= password


default: run

run: build
	docker run --rm -p 8888:8888 --name $(VENDOR)-$(NAME) $(VENDOR)/$(NAME)

build: Dockerfile
	docker build -t $(VENDOR)/$(NAME) .

deploy: build
	docker run --rm \
	$(VENDOR)/$(NAME) \
	/bin/sh -c 'cd /app; php vendor/bin/rocketeer deploy --host $(HOST) --username $(USERNAME) --password $(PASSWORD)'

hub: build
	docker login -u $(REGISTRY_USER) -p $(REGISTRY_PASSWORD)
	docker push $(VENDOR)/$(NAME)
