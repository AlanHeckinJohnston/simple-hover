window.onload = ()=>
{
    $("*[hover-open='']").hover((e)=>
    {
        let target = $(e.target);
        
        let open = $(target.siblings(".hover-content")[0]);
        target.remove();
        open.removeClass("hover-content");
        let height = open.height();
        open.height(0);
        open.animate({height: height});
    });
};