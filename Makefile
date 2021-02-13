# Title: Makefile
# Author: Griffin Brome
# License: MIT
# Description: Contains utilities for deploying project to dev. server

all:
	sudo cp -ruv * /opt/lampp/htdocs

clean:
	sudo rm -rvf /opt/lampp/htdocs/*
