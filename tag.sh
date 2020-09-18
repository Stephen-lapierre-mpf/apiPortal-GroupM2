#!/bin/sh

# Author : Stephen La Pierre
# Copyright (c) slapware.net
# Script follows here:

echo "What is your containerID?"
read CONTAINER
echo "Hello, $CONTAINER"
docker tag $CONTAINER stephenlapierrempf/api-portal
docker tag $CONTAINER stephenlapierrempf/mptvportal
docker tag $CONTAINER xaxisjenkins/api-portal
docker login --username=stephenlapierrempf --password=Flagler32136
docker push stephenlapierrempf/mptvportal
docker push stephenlapierrempf/api-portal
docker login --username=xaxisjenkins --password=jenkins.xaxis
docker push xaxisjenkins/api-portal
