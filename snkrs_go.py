#python3.6.5
#coding:utf-8

from selenium import webdriver
import datetime
import time
import sys

#print(datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S'))
#sys.exit(0)
#创建浏览器对象

print('启动时间:',datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S'))

i = 0
while i < 1000:
    driver = webdriver.Chrome()
    # 窗口最大化显示
    driver.maximize_window()
    driver.set_window_size(200, 200)
    driver.get('https://baidu.com/')


time.sleep(30)
sys.exit(0)






