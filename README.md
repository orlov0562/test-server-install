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

The services are unsecured becuase I used cloud instances for short period of time with dummy data.

If you need to leave it for long period of time, you can block ports via iptables. Something like

1. Allow requests from your IP/subnet, for example for Elastic 9200
```
iptables -I INPUT -p tcp -s 10.1.1.2 --dport 9200 -j ACCEPT
iptables -I INPUT -p udp -s 10.1.0.0/16 --dport 9200 -j ACCEPT
```
2. Drop requests from other IPs
```
iptables -I INPUT -p tcp -s 0.0.0.0/0 --dport 9200 -j DROP
```
3. View rules
```
iptables -L
```
