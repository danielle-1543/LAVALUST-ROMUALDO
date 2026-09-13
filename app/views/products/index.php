<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products | Reverie Cosmetics</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: #fdf7f9;
            font-family: Arial, sans-serif;
            color: #39282e;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 0 auto;
        }

        /* BRANDING */

        .brand {
            text-align: center;
            padding: 45px 20px 25px;
        }

        .brand-name {
            margin: 0;
            font-family: Georgia, serif;
            font-size: 34px;
            letter-spacing: 6px;
            color: #9e3f5f;
        }

        .brand-line {
            width: 45px;
            height: 2px;
            background: #d98ba4;
            margin: 15px auto;
        }

        .brand-subtitle {
            margin: 0;
            font-size: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #a68791;
        }

        /* HEADER */

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .page-title {
            margin: 0;
            font-family: Georgia, serif;
            font-size: 28px;
            color: #39282e;
        }

        .page-description {
            margin-top: 7px;
            margin-bottom: 0;
            color: #967f87;
            font-size: 13px;
        }

        /* BUTTONS */

        .action-buttons {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .add-btn,
        .logout-btn {
            display: inline-block;
            padding: 11px 20px;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: 0.2s;
        }

        .add-btn {
            background: #ad486b;
            color: #ffffff;
            border: 1px solid #ad486b;
        }

        .add-btn:hover {
            background: #923a59;
            border-color: #923a59;
        }

        .logout-btn {
            background: #ffffff;
            color: #9e3f5f;
            border: 1px solid #d98ba4;
        }

        .logout-btn:hover {
            background: #9e3f5f;
            color: #ffffff;
        }

        /* TABLE CARD */

        .table-card {
            background: #ffffff;
            border: 1px solid #eadde2;
            box-shadow: 0 8px 25px rgba(100, 60, 70, 0.06);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #f8edf1;
        }

        th {
            padding: 16px 18px;
            text-align: left;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #805d69;
            border-bottom: 1px solid #eadde2;
        }

        td {
            padding: 17px 18px;
            font-size: 14px;
            border-bottom: 1px solid #f0e6e9;
            vertical-align: middle;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background: #fdf9fa;
        }

        .product-name {
            font-family: Georgia, serif;
            font-size: 16px;
            color: #9e3f5f;
            font-weight: bold;
        }

        .description {
            color: #75646a;
            max-width: 280px;
        }

        .price {
            color: #a23d60;
            font-weight: bold;
        }

        .quantity {
            color: #59474d;
        }

        .date {
            color: #927f86;
            font-size: 12px;
        }

        /* ACTION LINKS */

        .actions {
            white-space: nowrap;
        }

        .edit-btn,
        .delete-btn {
            display: inline-block;
            padding: 7px 12px;
            text-decoration: none;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-right: 5px;
        }

        .edit-btn {
            color: #9e3f5f;
            border: 1px solid #d98ba4;
            background: #ffffff;
        }

        .edit-btn:hover {
            background: #f8edf1;
        }

        .delete-btn {
            color: #a13f59;
            border: 1px solid #e2a9b9;
            background: #ffffff;
        }

        .delete-btn:hover {
            background: #f9e9ed;
        }

        /* EMPTY STATE */

        .empty-state {
            text-align: center;
            padding: 50px 20px;
            color: #927f86;
        }

        .empty-state h3 {
            font-family: Georgia, serif;
            font-size: 20px;
            color: #9e3f5f;
            margin-bottom: 8px;
        }

        .empty-state p {
            font-size: 13px;
            margin-bottom: 20px;
        }

        /* FOOTER */

        footer {
            text-align: center;
            padding: 35px 20px;
            color: #a68791;
            font-family: Georgia, serif;
            font-size: 12px;
            letter-spacing: 3px;
        }

        /* MOBILE */

        @media (max-width: 700px) {

            .container {
                width: 94%;
            }

            .brand-name {
                font-size: 25px;
                letter-spacing: 4px;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
            }

            .action-buttons {
                width: 100%;
            }

            .add-btn,
            .logout-btn {
                text-align: center;
                flex: 1;
            }

            th,
            td {
                padding: 13px 12px;
            }

        }

    </style>

</head>

<body>

    <div class="container">

        <!-- BRANDING -->

        <div class="brand">

            <h1 class="brand-name">
                REVERIE COSMETICS
            </h1>

            <div class="brand-line"></div>

            <p class="brand-subtitle">
                Beauty &amp; Product Management
            </p>

        </div>


        <!-- PAGE HEADER -->

        <div class="page-header">

            <div>

                <h2 class="page-title">
                    Products
                </h2>

                <p class="page-description">
                    Manage your cosmetic products and inventory.
                </p>

            </div>


            <!-- BUTTONS -->

            <div class="action-buttons">

                <a
                    href="<?php echo site_url('products/create'); ?>"
                    class="add-btn"
                >
                    + Add Product
                </a>

                <a
                    href="<?php echo site_url('logout'); ?>"
                    class="logout-btn"
                >
                    Logout
                </a>

            </div>

        </div>


        <!-- PRODUCTS TABLE -->

        <div class="table-card">

            <?php if (!empty($products)): ?>

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Product</th>

                            <th>Description</th>

                            <th>Price</th>

                            <th>Quantity</th>

                            <th>Created</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>

                        <?php foreach ($products as $product): ?>

                            <tr>

                                <td>
                                    <?php echo html_escape($product['id']); ?>
                                </td>

                                <td>

                                    <div class="product-name">
                                        <?php echo html_escape($product['product_name']); ?>
                                    </div>

                                </td>

                                <td>

                                    <div class="description">
                                        <?php echo html_escape($product['description']); ?>
                                    </div>

                                </td>

                                <td>

                                    <span class="price">
                                        ₱<?php echo number_format($product['price'], 2); ?>
                                    </span>

                                </td>

                                <td>

                                    <span class="quantity">
                                        <?php echo html_escape($product['quantity']); ?>
                                    </span>

                                </td>

                                <td>

                                    <span class="date">
                                        <?php echo html_escape($product['created_at']); ?>
                                    </span>

                                </td>

                                <td>

                                    <div class="actions">

                                        <a
                                            href="<?php echo site_url('products/edit/' . $product['id']); ?>"
                                            class="edit-btn"
                                        >
                                            Edit
                                        </a>

                                        <a
                                            href="<?php echo site_url('products/delete/' . $product['id']); ?>"
                                            class="delete-btn"
                                        >
                                            Delete
                                        </a>

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            <?php else: ?>

                <div class="empty-state">

                    <h3>
                        No Products Yet
                    </h3>

                    <p>
                        Your product inventory is currently empty.
                    </p>

                    <a
                        href="<?php echo site_url('products/create'); ?>"
                        class="add-btn"
                    >
                        + Add Product
                    </a>

                </div>

            <?php endif; ?>

        </div>


        <!-- FOOTER -->

        <footer>
            REVERIE COSMETICS
        </footer>

    </div>

</body>

</html>