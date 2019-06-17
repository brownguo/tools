# -*- coding: utf-8 -*-
import struct

header = bytearray(0)
header += b'\xbf'
header += b'\x02'
iscookie = 1
ver = 369658059

if iscookie == True:
    header += bytearray([((0x7 << 4)+0xf)])
else:
    header += bytearray([((0x7 << 4))])
    header += struct.pack(">I", ver)
    header += bytearray([0]*4)

print(header)

buffer = struct.pack(">I", 369558056)
print(buffer)

descs = "helloworld"
#默认返回全部
print(descs[:])
#返回1到9结果
print(descs[1:9])