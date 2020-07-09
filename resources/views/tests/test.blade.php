<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<tbody>
  @foreach($values as $value)
    <tr>
      <td>{{ $value->text }}</td>
    </tr>
  @endforeach
</tbody>
</body>
</html>