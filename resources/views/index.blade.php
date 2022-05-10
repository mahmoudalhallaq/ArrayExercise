<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 1 (Array)</title>
</head>
<body>

<table border="">
    <tr>
        <th>
            Level
        </th>
        <th>
            Exercise
        </th>
        <th>
            Answer
        </th>
    </tr>
    <tr>
        <td rowspan="3">Level 1</td>
        <td>
            1
        </td>
        <td>
            {{$json_data->products[0]->id}} |
            {{$json_data->products[1]->id}} |
            {{$json_data->products[2]->id}}
        </td>
    </tr>
    <tr>
        <td>
            2
        </td>
        <td>
            @for ($product_id = 0; $product_id < count($json_data->products); $product_id++)
                @for ($variant_id = 0; $variant_id < count($json_data->products[$product_id]->variants); $variant_id++)
                    ID: {{$json_data->products[$product_id]->variants[$variant_id]->id}},
                    Product ID: {{$json_data->products[$product_id]->variants[$variant_id]->product_id}},
                    Title: {{$json_data->products[$product_id]->variants[$variant_id]->title}},
                    Price: {{$json_data->products[$product_id]->variants[$variant_id]->price}} /
                @endfor
                |||
            @endfor
        </td>
    </tr>
    <tr>
        <td>
            3
        </td>
        <td>
            @foreach($json_data->products as $product)
                @foreach($product->variants as $variant)
                    ID: {{$variant->id}},
                    Product ID: {{$variant->product_id}},
                    Title: {{$variant->title}},
                    Price: {{$variant->price}} /
                @endforeach
                |||
            @endforeach
        </td>
    </tr>
    <tr>
        <td>Level 2</td>
        <td>
            4
        </td>
        <td>
            @foreach($json_data->products as $product)
                @foreach($product->variants as $variant)
                    ID: {{$variant->id}},
                    Product ID: {{$variant->product_id}},
                    Title: {{$variant->title}},
                    Price: {{$variant->price}} /
                @endforeach
                |||
            @endforeach
        </td>
    </tr>
    <tr>
        <td>Level 3</td>
        <td>
            5
        </td>
        <td>
            @foreach($json_data->products as $product)
                @foreach($product->variants as $variant)
                    @foreach($variant->presentment_prices as $presentment_price)
                        Currency code: {{$presentment_price->price->currency_code}} /
                    @endforeach
                @endforeach
                |||
            @endforeach
        </td>
    </tr>
    <tr>
        <td>Level 4</td>
        <td>
            6
        </td>
        <td>
            @foreach($json_data->products as $product)
                @foreach($product->options as $option)
                    @foreach($option->values as $value)
                        Value: {{$value}} /
                    @endforeach
                @endforeach
                |||
            @endforeach
        </td>
    </tr>
</table>
</body>
</html>
