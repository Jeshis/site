<?php
include ('header.php');
?>

<main>
    <section>
        <div class="crypto">
        <h1 style="text-align:center;Color:Blue">Cryptography</h1>
        <img style="display:block;margin-left: auto;margin-right: auto;width: 50%;" src="../image/crypto.jpg"></br>
        <p style="text-align:justify;">
            <h3 style="text-align:center;">What is Cryptography?</h3>
            Cryptography is used to keep messages and data secure from being accessible to anyone other than the sender and the intended recipient. It is the study of communications and a form of security for messaging. Ultimately, cryptography can keep data from being altered or stolen. It can also be used to authenticate users. Cryptography often uses encryption and an algorithm to keep electronic data and messages secure and only readable by the intended parties. Cryptography has been around for centuries. The term itself comes from the Greek word kryptos, which translates to hidden. Today, cryptography is based on computer science practices and mathematical theory.</br>

            <h3 style="text-align:center;">Types of cryptography</h3>
            There are two main types of cryptography used for digital data and secure messages today: symmetric cryptography and asymmetric cryptography. Hash functions, a third type, doesn’t involve use of a key.</br>
            1. Symmetric cryptography: This is one of the most commonly used and simplest forms of encrypting and decrypting electronic data. It is also called secret-key or private-key cryptography. With symmetric cryptography, both the sender and the recipient will have the same key. This key is used to encrypt messages and data on one end and then decrypt it on the other end. Before communications begin, both parties must have the same secret key. Symmetric cryptography is fast, easy to use, and best suited for transmitting large amounts of data or for bulk encryption. The issue with this form of cryptography is that if a third party gets the secret key, they too can read and decrypt the data or messages.</br>

            2. Asymmetric cryptography: This is also called public-key cryptography, and it involves the use of two different keys. A public key is distributed widely to everyone to encrypt data. This key is required to send messages and encrypt them. A sender can request the public key for the recipient to encrypt the data. Then, it will require the private key, which is kept secret, to decrypt the message. The key pair of the private and public key are mathematically related. Both keys are needed to perform operations, send and receive encrypted data and messages, and access sensitive data. Asymmetric cryptography needs higher processing and longer keys, with pieces of data that are smaller than the key; therefore, is often used on a smaller scale. Asymmetric and symmetric cryptography can be used together in a cryptosystem. Asymmetric cryptography can be used to encrypt symmetric keys, for example, while the symmetric cryptography is used to transmit or encrypt larger amounts of data.  </br>

            3. Hash functions: This is a third type of cryptography that does not use a key. It uses a fixed length hash value based on the plain text message. This can then be used to ensure that the message has not been altered or compromised. Hash functions add an extra layer of security, as the hashed output can’t be reversed to reveal the data that was originally input. </br>


            <h3 style="text-align:center;">What is cryptography used for?</h3>
            The intention of cryptography is to keep data and messages secure and inaccessible to potential threats or bad actors. It is often working behind the scenes to encrypt and decrypt data you are sending through social media, applications, interactions on websites, and email. Symmetric cryptography can be used for these purposes:</br>

            1. Card transactions and payment applications</br>
            2. Random number generation</br>
            3. Signature verification to ensure the sender is who they claim to be</br>

            Asymmetric cryptography can be used for the following purposes:</br>

            1. Email messages</br>
            2. SIM card authentication</br>
            3. Web security</br>
            4. Exchange of private keys</br>



        </p>
            <div>
                </br><h3 style="text-align:center;"><a href="course.php">Click here if you finished reading</a></h3></br>
            </div>
        </div>
    </section>
</main>


<?php
include_once('../footer.php');
?>
