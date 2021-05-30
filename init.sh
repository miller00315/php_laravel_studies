
#!/bin/bash

docker run -d -p 3306:3306 \
-e MYSQL_ROOT_PASSWORD=RootPassword \
-e MYSQL_DATABASE=SuperGestor \
-e MYSQL_USER=MainUser \
-e MYSQL_PASSWORD=MainPassword \
mysql
