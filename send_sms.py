#!/usr/bin/env python
# -*- coding: utf-8 -*-

import requests as req
import json
import time
from hashlib import md5
import sys

url = 'xxx'
tKey = int(time.time())
original_pass = 'xxx'
encry = md5(original_pass.encode('utf-8')).hexdigest()
t = encry + str(tKey)
tKey = md5(t.encode('utf-8')).hexdigest()
body = {
    "username": "xxx",
    "password": tKey,
    "tKey": int(time.time()),
    "count": "100"
}


if __name__ == '__main__':

    print (body)

    headers = {'Content-Type':'application/json'}

    response = req.post(url,data = json.dumps(body),headers = headers)

    print(response.text)