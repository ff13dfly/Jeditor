# Jeditor数据格式
## 数值
* 范围
* 限定类型

## 字符串
* 限定长度

## 枚举
限定可选项的数据类型，配合select事件一起使用，实现丰富的数据编辑功能。

## 列表
作用等同于“枚举”，只是可以在前端显示所有的可选项，更加直观，适用于少量选择的枚举。配合select事件一起使用，实现丰富的数据编辑功能。

## 时间
对时间的格式化借助于moment.js，如不存在，将按照普通字符串对待。

## 图像
只支持小于1M的图像，直接转换为base64。大图像需配合upload事件一起使用，将图像上传到服务器之后，保存返回结果。

## 文件
文件需配合upload事件一起使用，将文件上传到服务器之后，保存返回结果。

## 布尔值
“是/否”类型的数据，用于快速设置，配合switch事件一起使用，实现丰富的数据编辑功能。

## 手机
手机号码类型的数据，可以自动进行校验，或者按照指定的规则进行校验。

## 电子邮件
电子邮件类型的数据，可以自动进行校验，或者按照指定的规则进行校验。