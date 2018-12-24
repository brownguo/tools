# The most commonly used tools for PHP.

![](https://img.shields.io/badge/commonly_used_tools-v1.0.0-519dd9.svg)
![](https://img.shields.io/badge/Language-php-blue.svg)
![](https://img.shields.io/travis/php-v/symfony/symfony.svg)
![](https://img.shields.io/travis/rust-lang/rust.svg)
![](https://img.shields.io/badge/platform-OSX-red.svg)

- date.php  时间类

- iMessage.php Mac下读取iMessage

- looger.php 日志类

- requests.php curl请求封装

- Timer.php 定时任务

- ssh_host.sh ssh免密码登录,需要sshpass支持

- progress.php PHP CLI显示Linux进度条

- .....


### 一些注释

```code
ANSI控制码的说明

例如:
  echo -ne "\33[32m" 可以将字符的显示颜色改为绿色
  echo -ne "\33[3;1H" 可以将光标移到第3行第1列处
具体的摘抄一些如下：
    \33[0m  关闭所有属性
    \33[1m  设置高亮度
    \33[4m  下划线
    \33[5m  闪烁
    \33[7m  反显
    \33[8m  消隐
    \33[30m -- \33[37m  设置前景色
    \33[40m -- \33[47m  设置背景色
    \33[nA  光标上移n行
    \33[nB  光标下移n行
    \33[nC  光标右移n行
    \33[nD  光标左移n行
    \33[y;xH设置光标位置
    \33[2J  清屏
    \33[K   清除从光标到行尾的内容
    \33[s   保存光标位置
    \33[u   恢复光标位置
    \33[?25l  隐藏光标
    \33[?25h  显示光标
```