<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 50px 20px;
            background: #fff5f8;
            font-family: Arial, sans-serif;
            color: #4a2632;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .brand {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand h1 {
            margin: 0;
            font-family: Georgia, serif;
            font-size: 34px;
            letter-spacing: 2px;
            color: #c2185b;
        }

        .brand p {
            margin: 8px 0 0;
            font-size: 13px;
            letter-spacing: 2px;
            color: #9b6678;
            text-transform: uppercase;
        }

        .form-box {
            background: #ffffff;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(194, 24, 91, 0.10);
            border: 1px solid #f3d5df;
        }

        .form-title {
            margin: 0 0 25px;
            font-family: Georgia, serif;
            font-size: 25px;
            color: #7b1e3d;
        }

        .field {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #6d3045;
        }

        input,
        textarea {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #e5b9c8;
            border-radius: 8px;
            background: #fffafb;
            color: #4a2632;
            font-family: Arial, sans-serif;
            font-size: 14px;
            outline: none;
        }

        input:focus,
        textarea:focus {
            border-color: #d81b60;
            box-shadow: 0 0 0 3px rgba(216, 27, 96, 0.08);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background: #d81b60;
            color: white;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            letter-spacing: 0.5px;
        }

        button:hover {
            background: #b71550;
        }

        .back {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #c2185b;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .back:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="brand">
        <h1>REVERIE COSMETICS</h1>
        <p>Edit Makeup Product Information</p>
    </div>

    <div class="form-box">

        <h1 class="form-title">Edit Product</h1>

        <form
            action="<?php echo site_url('products/edit/' . $product['id']); ?>"
            method="POST"
        >

            <div class="field">
                <label for="product_name">
                    Product Name
                </label>

                <input
                    type="text"
                    id="product_name"
                    name="product_name"
                    value="<?php echo html_escape($product['product_name']); ?>"
                    required
                >
            </div>

            <div class="field">
                <label for="description">
                    Description
                </label>

                <textarea
                    id="description"
                    name="description"
                    rows="5"
                    cols="40"
                ><?php echo html_escape($product['description']); ?></textarea>
            </div>

            <div class="field">
                <label for="price">
                    Price
                </label>

                <input
                    type="number"
                    id="price"
                    name="price"
                    value="<?php echo html_escape($product['price']); ?>"
                    step="0.01"
                    min="0"
                    required
                >
            </div>

            <div class="field">
                <label for="quantity">
                    Quantity
                </label>

                <input
                    type="number"
                    id="quantity"
                    name="quantity"
                    value="<?php echo html_escape($product['quantity']); ?>"
                    min="0"
                    required
                >
            </div>

            <button type="submit">
                Update Product
            </button>

        </form>

        <a class="back" href="<?php echo site_url('products'); ?>">
            Back to Products
        </a>

    </div>

</div>

</body>

</html>