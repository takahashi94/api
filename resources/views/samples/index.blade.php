<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @foreach ($posts as $item => $value)
    @foreach ((array)$value as $i => $v)
      {{-- {{ var_dump($v) }} --}}
    <div style='margin-bottom: 20px; padding: 30px; border: 1px solid #000; overflow:hidden;'>
      <div style='float: left;'><img src='{{ $v["Item"]["mediumImageUrls"][0]["imageUrl"] ?? ''}}'></div>
      <div style='float: left; padding: 20px;'>
      <div>{{ $v["Item"]["itemName"] ?? '' }}</div>
      <div><a href="{{ $v["Item"]["itemUrl"] ?? '' }}" target="_blank">{{ $v["Item"]["itemUrl"] ?? '' }}</a></div>
      <div>{{ $v['Item']["itemPrice"] ?? ''}}円</div>
      <div>{{$v['Item']["shopName"] ?? '' }}</div>
      </div>
    </div>
    @endforeach
  @endforeach
</body>
</html>