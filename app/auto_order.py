# coding:utf-8
from hashlib import md5, sha1
from hmac import HMAC
from urllib.parse import urlsplit, urljoin, quote, unquote, parse_qsl
from time import time
from random import choice
import requests, json
import logging, coloredlogs


class auto_order:
    def login(self, umid_token):
        response = requests.get(
            "https://qrlogin.taobao.com/qrcodelogin/generateQRCode4Login.do?adUrl=&adImage=&adText=&viewFd4PC=&viewFd4Mobile=&from=tb&appkey=00000000&umid_token=%s"
            % umid_token
        )
        data = json.loads(response.text)
        return data

    def getUmidToken(self):
        logging.debug("GetUmidToken...")
        return (
            "C"
            + str(int(time() * 1000))
            + "".join(str(choice(range(10))) for _ in range(11))
            + str(int(time() * 1000))
            + "".join(str(choice(range(10))) for _ in range(3))
        )


if __name__ == "__main__":
    start = auto_order()
    coloredlogs.install(level="DEBUG")
    umid_token = start.getUmidToken()
    # print(start.login(umid_token))
