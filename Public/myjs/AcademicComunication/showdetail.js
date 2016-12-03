 $(document).ready(function() {
    /*
    导航条active设置
     */
    $("#nav-academiccomunication").addClass("nav-active");

    /*
    点击一个会议显示详细信息
     */
    $(".items").click(function(){
        var itemnameValue=$(this).text();
        var url="robc/index.php?s=/Home/AcademicComunication/showDetail";
        $.post(url,{
            itemname:itemnameValue
        },function(data){
            document.getElementById("detail-content").innerHTML=data;
        });
    });
});