#!/bin/bash
cat <<MENU
    1   =>  xxxxxx  | desc
    2   =>  xxxxxx  | desc1
-----请输入ID-----
MENU
    echo -n "EnterHostId:"
    read host
    case "$host" in
        1|xxxxxx)
            exec sshpass -p thepassword  ssh username@host -p22
            ;;
        2|xxxxxx)
            exec sshpass -p thepassword  ssh username@host -p22
        *)
        echo "Error, No host"
        ;;
esac