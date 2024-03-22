<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="input-group mb-3 mt-5">
            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
            <input name="name_product" id="name" type="text" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                value="{{ $product->name }}">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Category</label>
            <select class="form-select" id="category" name="category">
                <option selected disabled>Choose...</option>
                <option value="1" @if ($product->category_id == 1) selected @endif>Elektronik</option>
                <option value="2"@if ($product->category_id == 2) selected @endif>Makanan</option>
                <option value="3"@if ($product->category_id == 3) selected @endif>Pakaian</option>
            </select>
        </div>
        <div class="input-group mb-3 mt-5">
            <span class="input-group-text" id="inputGroup-sizing-default">Quantity</span>
            <input name="quantity" id="quantity" type="number" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" value="{{ $product->quantity }}">
        </div>
        <div class="input-group mb-3 mt-5">
            <span class="input-group-text" id="inputGroup-sizing-default">Expired</span>
            <input name="expired" id="expired" type="date" class="form-control" aria-label="Sizing example input"
                value="{{ $product->expire_date }}" aria-describedby="inputGroup-sizing-default">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
