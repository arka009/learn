<?php 
	include "header.php";
 ?>
 <style>

 	.wrapper{
 		padding: 10px 10px 10px 0;
 	}
 	.contentpage{
 		border: 1px solid blue;
 		width: 1100px;
 	}
 </style>
 <div class="wrapper clearfix">
 	<div class="menu clearfix fl">
           
 	</div>
 	<div class="contentpage clearfix fl">
 		<?php include "html/first.php" ?>
 	</div>
 </div>
 
<script>
  $(function(){
        InitLeftMenu();

      


    });

	function InitLeftMenu() {
        var _menus = [

            {"menuid":"0","menuname":"首页","url":"http://www.qq.com"},


            {"menuid":"1","menuname":"产品管理",
                "menus":[
                    {"menuid":"0","menuname":"产品基本信息管理1","url":"html/two.php"},
                    {"menuid":"1","menuname":"产品审核管理1","url":"http://www.sina.com.cn/"}
                ]
            },
            {"menuid":"2","menuname":"周边产品管理",
                "menus":[
                    {"menuid":"0","menuname":"产品基本信息管理2","url":"http://bbs.csdn.net/topics/390299862"},
                    {"menuid":"1","menuname":"产品审核管理2","url":"http://www.mycodes.net"}
                ]
            },
            {"menuid":"3","menuname":"供应商管理",
                "menus":[
                    {"menuid":"0","menuname":"产品基本信息管理","url":"http://www.mycodes.net"},
                    {"menuid":"1","menuname":"产品审核管理","url":"http://www.mycodes.net"}
                ]
            },
                {"menuid":"4","menuname":"合同管理",
                    "menus":[
                        {"menuid":"0","menuname":"产品基本信息管理","url":"http://www.mycodes.net"},
                        {"menuid":"1","menuname":"产品审核管理","url":"http://www.mycodes.net"}
                    ]
                },
            {"menuid":"5","menuname":"财务管理",
                "menus":[
                    {"menuid":"0","menuname":"产品基本信息管理","url":"http://www.mycodes.net"},
                    {"menuid":"1","menuname":"产品审核管理","url":"http://www.mycodes.net"}
                ]
            },
            {"menuid":"6","menuname":"系统管理",
                "menus":[
                    {"menuid":"0","menuname":"产品基本信息管理","url":"http://www.mycodes.net"},
                    {"menuid":"1","menuname":"产品审核管理","url":"http://www.mycodes.net"}
                ]
            },
            {"menuid":"7","menuname":"团队管理",
                "menus":[
                    {"menuid":"0","menuname":"产品基本信息管理","url":"http://www.mycodes.net"},
                    {"menuid":"1","menuname":"产品审核管理","url":"http://www.mycodes.net"}
                ]
            },
            {"menuid":"8","menuname":"订单管理",
                "menus":[
                    {"menuid":"0","menuname":"产品基本信息管理","url":"http://www.mycodes.net"},
                    {"menuid":"1","menuname":"产品审核管理","url":"http://www.mycodes.net"}
                ]
            },
            {"menuid":"9","menuname":"服务师管理",
                "menus":[
                    {"menuid":"0","menuname":"产品基本信息管理","url":"http://www.mycodes.net"},
                    {"menuid":"1","menuname":"产品审核管理","url":"http://www.mycodes.net"}
                ]
            },
            {"menuid":"10","menuname":"CMS管理",
                "menus":[
                    {"menuid":"0","menuname":"产品基本信息管理","url":"http://www.mycodes.net"},
                    {"menuid":"1","menuname":"产品审核管理","url":"http://www.mycodes.net"}
                ]
            },
            {"menuid":"11","menuname":"CRM管理",
                "menus":[
                    {"menuid":"0","menuname":"产品基本信息管理","url":"http://www.mycodes.net"},
                    {"menuid":"1","menuname":"产品审核管理","url":"http://www.mycodes.net"}
                ]
            }



        ];

       var menulist = "";
           menulist += "<ul>";
           $.each(_menus, function(i, o){
               // console.log(i+1)
                 menulist+= "<li><i class='i"+parseInt(i+1)+"'></i><em></em><h1><a href='javascript:;'>"+ o.menuname +"</a></h1><ul>";

               if(o.menus){
                   $.each(o.menus,function(k, j){
                     menulist+="<li><h1><a href='javascript:;'>"+j.menuname+"</a></h1></li>";

                   })
               }
                menulist+="</ul></li>";
           });
           menulist+="</ul>";
        $(".menu").append(menulist);
       

        $(".menu>ul>li").click(function(){
            var _this = $(this).index()
            $.each(_menus, function(m, n){
                if(n.menuid == _this && !n.menus){

                    
                }
            })

        });
        



        $(".menu>ul>li li").click(function(){

           



            var _this = $(this).index();
            var __this = $(this).parent().parent().index();

            $.each(_menus, function(p, q){

               if(q.menus && p == __this) {
                       $.each(q.menus, function (y, u) {
                          // alert(_this)
                           if(_this == y &&  p == __this){
                             
                           		
                              
                             
                             }
   
 
                             
                           
                       })
               }


            })

        });


        $(".menu ul>li").hover(function(){
            $(this).addClass("active");
        },function(){
            $(this).removeClass("active");
        });


    }

</script>
 </body>
 </html>
