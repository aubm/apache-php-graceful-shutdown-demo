#!/bin/bash

apachectl -k graceful-stop
while [ ! -f /var/run/apache2/apache2.pid ]; do sleep 1; done
