<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <!-- <style>
        /* Form */
        form {
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin: 2em 0;
        }

        label {
            display: inline-block;
            margin-bottom: 0.5rem;
        }

        input,
        textarea {
            display: inline-block;
            padding: 0.5rem;
            width: 100%;
        }

        input:focus,
        textarea:focus {
            outline-color: dodgerblue;
        }

        .invalid {
            border: 2px solid rgb(153, 16, 16);
        }

        .invalid::placeholder {
            color: rgb(153, 16, 16);
        }

        .invalid-feedback:empty {
            display: none;
        }

        .invalid-feedback {
            font-size: smaller;
            color: rgb(153, 16, 16);
        }

        /* Button */
        .button {
            background-color: #e7e7e7;
            border: 2px solid transparent;
            border-radius: 8px;
            color: black;
            padding: 8px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
            font-family: sans-serif;
        }

        .button:hover {
            opacity: 0.8;
        }

        .button:active {
            border: 2px solid rgba(0, 0, 0, 0.5);
        }

        .button-success {
            background-color: #4caf50;
            color: white;
        }

        .button-primary {
            background-color: #008cba;
            color: white;
        }

        .button-danger {
            background-color: #f44336;
            color: white;
        }

        .button-small {
            font-size: 0.7rem;
        }
    </style> -->
</head>

<body>
    <?php $this->load->view('_partials/navbar.php'); ?>

    <div class="container">
        <h1>Contact Us</h1>
        <p>Hubungi kami melalui form berikut</p>
        <form action="" method="post" style="max-width: 600px;">
            <div>
                <label for="name">Name*</label>
                <input type="text" name="name" class="<?= form_error('name') ? 'invalid' : '' ?>" placeholder="your name" value="<?= set_value('name') ?>" />
                <div class="invalid-feedback"><?= form_error('name') ?></div>
            </div>
            <div>
                <label for="email">Email*</label>
                <input type="email" name="email" class="<?= form_error('email') ? 'invalid' : '' ?>" placeholder="your email address" value="<?= set_value('email') ?>" />
                <div class="invalid-feedback"><?= form_error('email') ?></div>
            </div>
            <div>
                <label for="message">Message*</label><br>
                <textarea name="message" cols="30" class="<?= form_error('message') ? 'invalid' : '' ?>" rows="5" placeholder="write your message"><?= set_value('message') ?></textarea>
                <div class="invalid-feedback"><?= form_error('message') ?></div>
            </div>

            <div style="display: flex; gap: 1rem">
                <input type="submit" class="button button-primary" value="Kirim">
                <input type="reset" class="button" value="Reset">
            </div>
        </form>
    </div>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>