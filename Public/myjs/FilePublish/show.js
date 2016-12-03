 $(document).ready(function() {
    /*
    导航条active设置
     */
    $("#nav-filepublish").addClass("nav-active");

    /*
    点击一个项目显示详细信息
     */
    $(".items").click(function(){
        var itemnameValue=$(this).text();
        var url="robc/index.php?s=/Home/ProjectProgress/showDetail";
        $.post(url,{
            itemname:itemnameValue
        },function(data){
            document.getElementById("detail-content").innerHTML=data;
        });
    });
});