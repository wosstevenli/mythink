<!--需要改变配置不应在默认配置文件中直接修改，在新建的应用配置config文件中新建项，应用配置config项目会覆盖惯例配置文件中的值  -->
<!--解决多个场景下的配置问题，只需要改变app_status的值即应用不同场景的配置环境  -->
<?php
    return [
        'app_status'=>'home',
        'app_email'=>'13510765087@163.com',
        'app_author'=>'STEVEN'
    ];
?>