# test-server-install

```
mkdir -p /tmp/test-server-install && cd /tmp/test-server-install && \
apt-get install -y wget bsdtar && \
wget -O test-server-install.zip https://github.com/orlov0562/test-server-install/archive/master.zip && \
bsdtar --strip-components=1 -xvf test-server-install.zip && \
bash install.sh && \
rm -rf /tmp/test-server-install
```

You can find instalation details and tips into /root/server-info.txt
```
cat /root/server-info.txt
```
