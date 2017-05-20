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
	$(VENDOR)/$(NAME) \
	/bin/sh -c 'cd /app; php vendor/bin/rocketeer deploy --host $(HOST) --username $(USERNAME) --password $(PASSWORD)'


#    docker run -it --rm
#    getherbie/website
#    /bin/sh -c 'cd /app; php vendor/bin/rocketeer deploy --host tebe.ch --username tbreusst --password pi3,1415cyo'
