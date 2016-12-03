 $(document).ready(function() {
    /*
    导航条active设置
     */
    $("#nav-researchteam").addClass("nav-active");

    /*
    点击一个团队显示详细信息
     */
    $(".team").click(function(){
        var itemnameValue=$(this).text();
        var url="robc/index.php?s=/Home/ResearchTeam/showTeamDetail";
        $.post(url,{
            itemname:itemnameValue
        },function(data){
            document.getElementById("detail-content").innerHTML=data;
        });
    });

    /*
    点击一个成员显示详细信息
     */
    $(".member").click(function(){
        var itemnameValue=$(this).text();
        var url="robc/index.php?s=/Home/ResearchTeam/showMemberDetail";
        $.post(url,{
            itemname:itemnameValue
        },function(data){
            document.getElementById("detail-content").innerHTML=data;
        });
    });
});