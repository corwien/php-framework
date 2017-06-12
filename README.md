>本文将从零开始搭建一个现代化的PHP框架，该框架会拥有现代框架的一切特征，
如单入口，路由，依赖注入，composer类自动加载机制等等，如同时下最流行的Laravel框架一样。

## 一、文档说明
[手把手教你开发现代PHP框架](https://segmentfault.com/a/1190000009733196)

## 二、分支版本说明
### 1. first-version
该版本实现最基本的框架功能，实现MySQLPDO的连接，查询，创建引导文件，创建项目的配置文件（包括连接数据库的用户名和密码等）

### 2. second-version
 实现单一入口和mvc架构
 
 ### 3. third-version
 使用composer进行类自动加载，不用再使用 `require` 引入了
 
 ### 4. fourth-version
 实现一个简单的依赖注入容器 DI Container，可以通过该容器对象进行数据的封装和获取。
 
 ### 5. firth-version
 重构控制器，使用面向对象的方式去开发，编写控制器类，然后让路由指向到对应的控制器的方法，这样在我们以后的工作流中就会方便很多。
 
 ```
 $router->get('about', 'PagesController@about');
 ```
 
 ### 6. sixth-version
 全局函数 view()，我们可以使用该函数来代替 `PagesController` 中的 `require 'views/about.view.php';` 
 这句代码，我们改成 `return view('about');` 这样，可读性会好很多。同时在 `psr标准中` 也有这样的规定，在声明一个类的文件中是不能存在 require 代码的。
 
 
 
