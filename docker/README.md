#Docker
##install
* wget -qO- https://get.docker.com/ | sh
* sudo usermod -aG docker username
* sudo service docker start
* docker run hello-world
##command
###content
|name|command|param|
|-|-|-|
|运行|docker run|-p -d --name -v -i -t
|查看|docker ps|
|停止|docker stop|
|删除|docker rm|
|查看进程|docker top|
|查看日志|docker logs|
|查看端口|docker port|
###image
|name|command|param|
|-|-|-|
|查看|docker images|
|获取| docker pull|
|查找|docker search|
|更新|docker commit|-m -a |
|创建|docker build |-t |
|设置标签|docker tag|
##link
* http://www.docker.com
* https://hub.docker.com/
