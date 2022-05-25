function jupload()
{
    $(".imageholder").append('<img src="img/loading.gif">');
}

function juploadstop(result)
{
    if(result==0)
    {
        $(".imageholder").html("");

    }
    // the result will be the path to the image
    else if(result!=0)
    {
        $(".imageholder").html("");
        // imageplace is the class of the div where you want to add the image  
        $(".imageplace").append("<img src='"+result+"'>");
    }   
}