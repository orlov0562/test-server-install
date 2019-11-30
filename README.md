# test-server-install

```
mkdir -p /tmp/test-server-install && cd /tmp/test-server-install && \
apt-get install -y wget unzip && \
wget -O test-server-install.zip https://github.com/orlov0562/test-server-install/archive/master.zip && \
unzip -jo test-server-install.zip -d test-server-install && cd test-server-install && \
bash install.sh && \
rm -rf /tmp/test-server-install
```
