<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Совершенные Покупки</h1>
    <a href ="/">Назад</a>
    <div>
        @foreach ($buy as $item)
        <h2>Запись#{{$item->id}}</h2>
        <h2>Количество:{{$item->quantity}}</h2>
        <h3>Дата создания{{$item->created_at}}</h2>
      @endforeach
          </div>
</body>
</html>