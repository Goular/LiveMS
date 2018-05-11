# LiveMS [直播管理系统]

# 采用技术栈
<pre>
    Gloang 1.10                         [服务端]
    PHP7 + Swoole                       [管理端]
    ElasticSearch (ELK框架)              [站内全文检索和日志分析]
    Docker+kubernetes+jenkins           [分布式部署]
    kafka                               [消息队列，日志管理]
    Mysql                               [数据库]
    Redis                               [缓存和Session]
    后期规划
    Vue                                 [移动端网站]
    Koltin                              [MVP架构的Android原生开发]
</pre>

# 简短概述
<pre>
    使用Laravel作为管理系统框架和提供API服务的入口，使用Golang作为后端长连接服务的利器，Golang+PHP组合开发，后期移动端打算采用Vue作为开发手段，兼顾原生Android开发，暂不打算支持苹果原生开发
</pre>