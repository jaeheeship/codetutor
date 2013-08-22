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
            <h1>Blog List</h1>
            <hr/>
            <table class="table table-striped"> 
                <thead>
                    <tr>
                        <td>id</td>
                        <td>title</td>
                        <td>content</td>
                        <td> </td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($blog_list as $key => $blog):?>
                     <tr>
                         <td><?php echo $blog->id;?></td>
                         <td><?= $blog->title;?></td>
                         <td><?= $blog->content;?></td>
                         <td><a class="btn btn-info" href="/codeigniter/blog/writeform/<?=$blog->id;?>"> 수정 </a> <a class="btn btn-danger" href="/codeigniter/blog/deleteItem/<?=$blog->id;?>"> 삭제 </a> </td>
                     </tr>
                     <?php endforeach;?>
                </tbody>
            </table> 
            <a class="btn btn-primary pull-right" href="/codeigniter/blog/writeform">POST 작성 </a>
        </div> 
    </body> 
</html>
