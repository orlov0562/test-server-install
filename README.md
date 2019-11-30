# test-server-install

```
mkdir -p /root/tmp && cd /root/tmp && \
apt-get install -y wget unzip && \
wget -O test-server-install.zip https://github.com/orlov0562/test-server-install/archive/master.zip && \
unzip -jo test-server-install.zip -d test-server-install && \
bash test-server-install/install.sh && \
rm -rf /root/tmp/test-server-install*
```
