#python3.6.5
#coding:utf-8

from selenium import webdriver
import datetime
import time
import sys

#print(datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S'))
#sys.exit(0)
#创建浏览器对象

while 0 < 1000:
    driver = webdriver.Chrome()
    # 窗口最大化显示
    driver.maximize_window()
    driver.set_window_size(200, 200)
    driver.get('https://www.nike.com/cn/')


time.sleep(30)
sys.exit(0)






