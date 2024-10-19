<?php
require_once __DIR__ . '/classes/Customer.php';
require_once __DIR__ . '/classes/Account.php';
require_once __DIR__ . '/classes/AccountNumber.php';

$accountsNumbers = [
    new AccountNumber('12345678'),
    new AccountNumber('87654321'),
    new AccountNumber('92838765')
];

$accounts = [
    new Account($accountsNumbers[0], -20, 'Current'),
    new Account($accountsNumbers[1], 5700, 'Savings'),
    new Account($accountsNumbers[2], 1000, 'Investment')
];

$customer = new Customer('Mark', 'Kapp', 'markapp@example.com', 'password', $accounts);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Logo.png" type="image/png">
    <title>Bank Account</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <!-- Bootstrap 5.3.3 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="p-2 mb-3">
        <h1>Bank Account</h1>
    </header>
    <main class="container">
        <div class="card p-3">
            <h2><span class="text-secondary">User: </span><?= $customer->getFullName() ?></h2>

            <table class="table">
                <thead>
                    <tr>
                        <th class="text-darkblue">Account Number</th>
                        <th class="text-darkblue">Balance</th>
                        <th class="text-darkblue">Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customer->getAccounts() as $account) : ?>
                    <tr>
                        <td class="text-secondary"><?= $account->getAccountNumber()->getNumber() ?></td>
                        <td><?= $account->getType() ?></td>
                        <?php if ($account->getBalance() >= 0) : ?>
                        <td class="text-success">
                            <?php else : ?>
                        <td class="text-danger">
                            <?php endif; ?>
                            &euro; <?= $account->getBalance() ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </main>
</body>

</html>