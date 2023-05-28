<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmarks</title>
    <style>
        label{
            display:block;
            margin-bottom:10px;
        }
    </style>
</head>
<body>
        <h1>Add Bookmark</h1>
        <form action=<?=route('submit')?> method='post'>
        @csrf
            <label>Name: <input type="text" name="name" > </label>
            <label>Url: <input type="text" name="url" > </label>
           <label>
            Folder
            <select name='folder'>
                    <option value='Favorites'>Favorites</option>
                    <option value='Others'>Others</option>
                </select>
           </label>
           <input type="submit" value="Add">
        </form>
        <h1>Bookmark</h1>
        <table border>
            <thead>
                <tr>
                    <th>Folder</th>
                    <th>Name</th>
                    <th>URL</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
@foreach($bookmarks as $bookmark)
                <tr>
                    <td>{{$bookmark->folder}}</td>
                    <td>{{$bookmark->name}}</td>
                    <td>{{$bookmark->url}}</td>
                    <td><a href='/destroy/<?=$bookmark->id?>'>Delete</a></td>
                </tr>
@endforeach
            </tbody>
        </table>
</body>
</html>