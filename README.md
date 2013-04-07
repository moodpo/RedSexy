RedSexy
=======

一款漂亮的Typecho主题

### 1.使用方法

将文件下载后解压放在/usr/theme/下即可。

### 2.依赖插件

2.1 页面浏览次数统计插件
    [State] [1]
    
2.2 日志顶踩插件
    [Digg] [2]
    
由于其存在一些bug,下载Digg后需要修改一些地方。

a.在Digg/digg.js中修改提交路径：

    var digg_url = sitUrl+'action/Digg'; // 在第3行

b.在Digg/digg.js中修改jquery选择ID：

    var s = '#digg-' + action + '-' + cid+ '-num'; //在第19行

c.在Digg/Plugin.php中修改output方法：
**在echo $setting->src;语句之上添加**
    
    //输出地址
    echo "<script type='text/javascript'>var sitUrl = '" . (Helper::options()->siteUrl )."';</script>"; 

**在echo $setting->src;语句之下修改**

    if (!$return) {
        echo "<div class=\"digg\" class=\"clearfix\">";
        foreach ($items as $k => $v) {
            echo '<a href="javascript:void(0)" class="digg-'.$v.'" onclick="javascript:digg(\'' . $v . '\',\'' . $cid . '\');" id="digg-' .$v. '-' .$cid. '">';
            echo $result['items'][$v];
            echo '(<span id="' . 'digg-' . $v . '-' .$cid. '-num">' . (isset($result[0][$v]) ? $result[0][$v]['count'] : 0 ) . '</span>)</a>';
        }
        echo '</div>';
        return;
    }

d.在Digg_Plugin类下添加空方法，方便在主题中调用：

    public function execute(){
  	
    }

### 3.头像引用地址

在usr/uploads/中新建目录author，在里面放上与作者名相同的以.jpg为后缀的图片即可，这块我写死了。

你也可以放别的地方，但是需要修改主题文件。
    
[1]:http://tepic2-ubox.stor.sinaapp.com/Stat.zip
[2]:https://skydrive.live.com/?cid=70cbfefcb6408619&id=70CBFEFCB6408619!152
