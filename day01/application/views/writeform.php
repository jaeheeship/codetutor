<!doctype html>
<html>
    <head>
    <title> Blog </title>
    <meta charset="utf-8" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Blog</h1>
            <hr/>
            <form class="form" method="post" action="/codeigniter/blog/save"> 
                <input type="hidden" name="id" value="<?=$blog->id;?>" />
                <div class="form-group">
                    <label> title </label>
                    <input type="text" name="title" class="form-control" value="<?=$blog->title;?>" />
                </div>
                <div class="form-group">
                    <label> content </label>
                    <textarea name="content" class="form-control"> <?=$blog->content;?> </textarea>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary" >  Save </button>
                </div>

            </form>
        </div> 
    </body> 
</html>
