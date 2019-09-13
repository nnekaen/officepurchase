<?php include("includes/config.php");?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/1.0.1/pure-min.css" />
    <style scoped>
        /*need to extract this to style.css*/
        .container {
            padding: 20px;
            margin: 0 auto;
            width: 80%;
        }

        .button-container {
            padding-bottom: 10px;
        }

        .vertical-align-top {
            vertical-align: top;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;

        }

        .text-left {
            text-align: left;
        }

        .width-100 {
            width: 100%;
        }

        .bottom-border-th {
            border-bottom: 1px solid #cbcbcb;
            border-bottom-width: 1px !important;
        }

        .top-border-th {
            border-top: 1px solid #cbcbcb;
            border-top-width: 1px !important;
        }

        .input-no-border {
            border: none;
            outline: 0;
        }

        .color-white {
            color: white;
        }

        .button-secondary {
            background: rgb(66, 184, 221); /* this is a light blue */
        }

        .button-error {
            background: rgb(202, 60, 60); /* this is a maroon */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><?php print "How are you"; ?></h1>
        <div class="button-container text-right">
            <button class="pure-button button-secondary color-white" onclick="addRow()">+ Add new item</button>
        </div>
        <table class="pure-table width-100">
            <thead>
                <tr>
                    <th class="vertical-align-top" rowspan="2">Brief description of Articles/Goods/Services being
                        procured</th>
                    <th class="vertical-align-top" rowspan="2">Quantity</th>
                    <th class="vertical-align-top bottom-border-th">Unit Price</th>
                    <th class="vertical-align-top bottom-border-th">Total Price</th>
                    <th class="vertical-align-top" rowspan="2"></th>
                </tr>
                <tr>
                    <th colspan="2" class="text-center">Estimated price</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot class="top-border-th">
                <tr>
                    <th scope="row">Totals (CHF)</th>
                    <td class="text-right" colspan="3"><span class="total">0</span></td>
                    <td class="text-right"></td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    <script src="index.js"></script>
</body>

</html>
