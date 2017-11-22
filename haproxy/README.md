#HAProxy
##Installing HAProxy
https://www.vultr.com/docs/installing-and-configuring-haproxy-on-ubuntu-14-04
* add-apt-repository ppa:vbernat/haproxy-1.5
* apt-get update
* apt-get install haproxy
##autossh
* autossh -M 29950 -f -C -g -N -L 29959:127.0.0.1:19999 root@jp2.xyh.io
##config
* http://www.jianshu.com/p/c9f6d55288c0
* http://www.ttlsa.com/linux/haproxy-study-tutorial/