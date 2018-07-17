#!/bin/bash
i="0"
while [ $i -lt 6 ]
do
    begin=`date +%s`
    php /var/www/html/firebase/index.php Firebase_controller retrieveData $1
    end=`date +%s`
    if [ $(($end - $begin)) -lt 10 ]; then
        sleep $(($begin + 10 - $end))
    fi
    i=$[$i+1]
done
