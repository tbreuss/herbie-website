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

deploy: Dockerfile
	docker run -it --rm \
	--name getherbie-website-deploy \
	-v "$(PWD)":/usr/src/myapp \
	-w /usr/src/myapp $(VENDOR)/$(NAME) \
	php vendor/bin/rocketeer deploy --host $(HOST) --username $(USERNAME) --password $(PASSWORD)

