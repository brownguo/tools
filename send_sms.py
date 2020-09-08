#!/usr/bin/env python
# -*- coding: utf-8 -*-

import requests as req
import json
import time
from hashlib import md5
import random


def send_sms():
    username = "xkm888hy"
    password = "4bCJHJ6i"
    url = "http://api.mix2.zthysms.com/v2/sendSms"
    tKey = int(time.time())
    original_pass = password
    encry = md5(original_pass.encode("utf-8")).hexdigest()
    t = encry + str(tKey)
    tKey = md5(t.encode("utf-8")).hexdigest()
    send_msg_content = '【We are best潮流文化】618来临之即，We have best 球鞋团队重磅回归，百分百一手货源，给您带来高品质热门球鞋。主打 Air Jordan 、YEEZY、Converse系列，可单可批可长期合作。合作微信：wab_sneaker';
    post_body = {
        "username": username,
        "password": tKey,
        "tKey": int(time.time()),
        "content": (
                "本次验证码为：%s，您的手机号正在申请通过美牙APP注册并授权。如非本人操作，请忽略。【西科码】"
                % random.randint(100000, 999999)
        ),
        "mobile": "18513558982",
        # "mobile": "13109510222",
    }

    headers = {"Content-Type": "application/json"}

    response = req.post(url, data=json.dumps(post_body), headers=headers)

    print(response.text)


if __name__ == "__main__":
    send_sms()