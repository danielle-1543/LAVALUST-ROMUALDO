<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Products</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 70px 20px;
            background: #fff5f8;
            font-family: Arial, sans-serif;
            color: #4a2632;
        }

        .container {
            width: 100%;
            max-width: 520px;
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

        .delete-box {
            background: #ffffff;
            padding: 40px;
            border-radius: 14px;
            border: 1px solid #f3d5df;
            box-shadow: 0 8px 25px rgba(194, 24, 91, 0.10);
            text-align: center;
        }

        .delete-title {
            margin: 0 0 18px;
            font-family: Georgia, serif;
            font-size: 27px;
            color: #7b1e3d;
        }

        .message {
            margin: 0 0 20px;
            color: #6d3045;
            font-size: 15px;
        }

        .product-name {
            margin: 0 0 30px;
            padding: 15px;
            background: #fff0f5;
            border-radius: 8px;
            color: #c2185b;
            font-size: 18px;
        }

        .actions {
            display: flex;
            gap: 12px;
            justify-content: center;
        }

        button {
            padding: 13px 25px;
            border: none;
            border-radius: 8px;
            background: #d81b60;
            color: white;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #b71550;
        }

        .cancel {
            display: inline-block;
            padding: 13px 25px;
            border: 1px solid #e5b9c8;
            border-radius: 8px;
            color: #c2185b;
            background: #ffffff;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .cancel:hover {
            background: #fff0f5;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="brand">
        <h1>REVERIE COSMETICS</h1>
        <p>Delete Makeup Products Information</p>
    </div>

    <div class="delete-box">

        <h1 class="delete-title">Delete Product</h1>

        <p class="message">
            Are you sure you want to delete this product?
        </p>

        <p class="product-name">
            <strong>
                <?php echo html_escape($product['product_name']); ?>
            </strong>
        </p>

        <form
            action="<?php echo site_url('products/delete/' . $product['id']); ?>"
            method="POST"
        >

            <div class="actions">

                <button type="submit">
                    Yes, Delete
                </button>

                <a class="cancel" href="<?php echo site_url('products'); ?>">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

</body>

</html>