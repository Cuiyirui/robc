 $(document).ready(function() {
    /*
    导航条active设置
     */
    $("#nav-aboutproject").addClass("nav-active");

    /*
    点击一个物种显示详细信息
     */
    $(".items").click(function(){
        var itemnameValue=$(this).text();
        var url="robc/index.php?s=/Home/AboutProject/showdetail";
        $.post(url,{
            itemname:itemnameValue
        },function(data){
            document.getElementById("detail-content").innerHTML=data;
        });
    });
});