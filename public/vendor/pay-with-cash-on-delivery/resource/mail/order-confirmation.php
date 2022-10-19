<?php



use Foodboard\Config;

function getOrderBody($cartItemsArray, $customerDetailsArray, $shippingAmount)
{
    ob_start();

?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Order Confirmation</title>
        <style>
            .tbl-cart {
                margin-top: 20px;
                margin-bottom: 20px;
            }
        </style>
    </head>

    <body itemscope itemtype='http://schema.org/EmailMessage' style="margin: 0; font-family: 'HelveticaNeue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 13px; color: #616161; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100%; height: 100%; line-height: 1.6em; background-color: #FFF;">

        <table style='vertical-align: top; width: 100%;'>
            <tr>
                <td style='vertical-align: top;'></td>
                <td width='900px' style='vertical-align: top; padding: 0 !important; width: 100% !important;'>
                    <div style='max-width: 1200px; display: block; padding: 20px;'>
                        <table width='100%' cellpadding='0' cellspacing='0' itemprop='action' itemscope itemtype='http://schema.org/ConfirmAction' style='background-color: #fff; border-radius: 2px;'>
                            <tr>
                                <td style='padding: 20px;'>
                                    <meta itemprop='name' content='Confirm Email' />
                                    <table width='100%' cellpadding='0' cellspacing='0'>
                                        <tr>
                                            <td><?php if (!empty($cartItemsArray)) { ?>
                                                    <div style="padding: 10px 10px 10px 10px;"></div>

                                                    <div>
                                                        <h3>
                                                            <h3>Thank you for your order!</h3>
                                                            <div>
                                                                <h5>Your ordered items are:</h5>
                                                            </div>
                                                            <table style="border: 1px solid #E0E0E0; border-radius: 3px;" cellpadding="10" cellspacing="0">
                                                                <tbody style="border: 1px solid #E0E0E0; border-radius: 3px; margin: 10px 0; padding: 10px;">
                                                                    <tr>
                                                                        <th style="padding: 5px 10px; border-bottom: 1px #E0E0E0 solid; border-right: 1px #E0E0E0 solid; text-align: left" width="45%"><?php echo "Title"; ?></th>
                                                                        <th style="padding: 5px 10px; border-bottom: 1px #E0E0E0 solid; border-right: 1px #E0E0E0 solid; text-align: right" width="15%"><?php echo "Unit Price"; ?>
                                                                            (<?php echo Config::CURRENCY_SYMBOL; ?>)</th>
                                                                        <th style="padding: 5px 10px; border-bottom: 1px #E0E0E0 solid; border-right: 1px #E0E0E0 solid; text-align: right" width="15%"><?php echo "Quantity"; ?></th>
                                                                        <th style="padding: 5px 10px; border-bottom: 1px #E0E0E0 solid; text-align: right" width="15%"><?php echo "Total Price"; ?> (<?php echo Config::CURRENCY_SYMBOL; ?>)</th>
                                                                    </tr>
                                                                    <?php
                                                                    foreach ($cartItemsArray as $cartItems) {
                                                                        foreach ($cartItems as $k => $v) {
                                                                            $productTitle = $cartItems[$k]["name"];
                                                                            $price = $cartItems[$k]["unit_price"];
                                                                    ?>
                                                                            <tr class="product-title-resp">
                                                                                <td style="padding: 5px 10px; border-bottom: 1px #E0E0E0 solid; border-right: 1px #E0E0E0 solid;"><?php echo $productTitle; ?></td>
                                                                                <td data-label="Price" style="padding: 5px 10px; border-bottom: 1px #E0E0E0 solid; border-right: 1px #E0E0E0 solid; text-align: right"><?php echo number_format($price, 2); ?></td>
                                                                                <td data-label="Quantity" style="padding: 5px 10px; border-bottom: 1px #E0E0E0 solid; border-right: 1px #E0E0E0 solid; text-align: right"><?php echo $cartItems[$k]['quantity']; ?></td>
                                                                                <td data-label="Total" style="padding: 5px 10px; border-bottom: 1px #E0E0E0 solid; text-align: right"><?php echo number_format($price * $cartItems[$k]['quantity'], 2); ?></td>

                                                                            </tr>
                                                                        <?php
                                                                            $total_price_array[] = $price * $cartItems[$k]['quantity'];
                                                                        }
                                                                    }
                                                                    $sub_total_price = array_sum($total_price_array);
                                                                    if (!empty($shippingAmount)) {
                                                                        $total_price = $sub_total_price + $shippingAmount;
                                                                        ?>
                                                                        <tr class="sub_total">
                                                                            <td style="padding: 5px 10px; border-bottom: 1px #E0E0E0 solid; border-right: 1px #E0E0E0 solid; text-align: right" align="right" colspan="2"><strong><?php echo "Delivery Fee"; ?> (<?php echo Config::CURRENCY_SYMBOL; ?>)</strong></td>
                                                                            <td style="padding: 5px 10px; border-bottom: 1px #E0E0E0 solid; text-align: right" align="right" data-label="Shipping Total" colspan="3"><strong><?php echo number_format($shippingAmount, 2); ?></strong></td>
                                                                        </tr>
                                                                    <?php
                                                                    } else {
                                                                        $total_price = $sub_total_price;
                                                                    }
                                                                    ?>
                                                                    <tr class="sub_total">
                                                                        <td style="padding: 5px 10px; text-align: right" align="right" colspan="2"><strong><?php echo "Grand Total"; ?> (<?php echo Config::CURRENCY_SYMBOL; ?>)</strong></td>
                                                                        <td style="padding: 5px 10px; text-align: right" align="right" data-label="Grand Total" colspan="3"><strong><?php echo number_format($total_price, 2); ?></strong></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h3>Customer details:</h3>
                                                            <?php
                                                            $email = "";
                                                            foreach ($customerDetailsArray as $k => $v) {
                                                                if ($k == "email") {
                                                                    $email = $v;
                                                                }
                                                            ?>
                                                                <div>
                                                                    <strong><?php echo ucfirst($k); ?>: </strong><span><?php echo $v; ?></span>
                                                                </div>
                                                            <?php } ?>
                                                    </div>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <div width='100%' cellpadding='0' cellspacing='0' style="margin-top: 20px; padding: 20px; background-color: #fff;">
                            <p>If you have questions about your order or
                                general feedback, please contact us.</p>
                            </hr>
                            <i>This email was sent to
                                <?php if (!empty($email)) {
                                    echo $email;
                                }
                                ?>.
                                This email is an order confirmation and product delivery email, for the purchase made. It is
                                not a marketing or promotional email and that is why this email
                                does not contain an unsubscribe link. Still you have the option
                                to register your grievance via contact form.</i>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
        </table>
    </body>

    </html>

<?php

    return ob_get_clean();
}
?>