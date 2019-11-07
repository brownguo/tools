#python3.6.5
#coding:utf-8

from selenium import webdriver
import datetime
import time
import sys

#print(datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S'))
#sys.exit(0)
#创建浏览器对象
driver = webdriver.Chrome()
#窗口最大化显示
driver.maximize_window()

def login(url,mall):
    '''
    登陆函数
    
    url:商品的链接
    mall：商城类别
    '''
    driver.get(url)
    driver.implicitly_wait(10)
    time.sleep(2)
    #淘宝和天猫的登陆链接文字不同
    if mall=='1':
        #找到并点击淘宝的登陆按钮
        driver.find_element_by_link_text("亲，请登录").click()
    else:
        #找到并点击天猫的登陆按钮
        driver.find_element_by_link_text("请登录").click()
    print("20秒内登陆")
    #用户扫码登陆
    time.sleep(20)
    
def buy(buy_time,mall):
    '''
    购买函数
    
    buy_time:购买时间
    mall:商城类别
    
    获取页面元素的方法有很多，获取得快速准确又是程序的关键
    在写代码的时候运行测试了很多次，css_selector的方式表现最佳
    '''
    btn_order_text = '提交订单'

    if mall=='1':
        #"立即购买"的css_selector
        btn_buy='#J_juValid > div.tb-btn-buy > a'
        #"立即下单"的css_selector
        #btn_order='#submitOrder_1 > div.wrapper > a'
    else:
        btn_buy='#J_LinkBuy'
        btn_order='#submitOrderPC_1 > div > a'
    while True:
        #现在时间大于预设时间则开售抢购
        if datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S') >= buy_time:
            try:
                #找到“立即购买”，点击
                if driver.find_element_by_css_selector(btn_buy):
                    driver.find_element_by_css_selector(btn_buy).click()
                    break
                time.sleep(0.1)
            except:
                time.sleep(0.1)
    
    while True:
        try:
            #找到“立即下单”，点击，
            if driver.find_element_by_css_selector(btn_order):
                driver.find_element_by_css_selector(btn_order).click()
                #下单成功，跳转至支付页面
                print("购买成功")
            break

        except:
            time.sleep(0.1)


if __name__ == "__main__":
    url='url'
    mall=2
    bt='2019-11-07 14:56:30'
    login(url,mall)
    buy(bt,mall)