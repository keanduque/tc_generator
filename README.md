# Terms & Condition Generator

## Overview

This is is a simplified app for Terms & Condition Generator based on iubenda tasks, that can able to generate template when executed.

This app was made using PHP 8.2.4. Be sure to check their documentation.

## App Features:

-   getSectionText, getClausesText and generate Terms and Conditions (generateTC)

## Setup and Usage

1. **Install Dependencies**

    ```bash
    composer install
    ```

2. **Generate Document**

    ```bash
    php -f App.php
    ```

    **Sample Output based on template**

    ```output
        A Terms & Conditions Document

        This document is made of plaintext.

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor ante in augue malesuada vestibulum.
        Aenean ut bibendum quam. Etiam feugiat velit at pharetra tincidunt. Integer at justo augue.
        Duis et fringilla quam. Aenean dictum dignissim condimentum.

        Is made of And dies.
        Is made of The white horse is white.
        Is made of The quick brown fox, jumps over the lazy dog.

        Your legals.
    ```

3. **Run Test**

    ```bash
    composer test
    ```

## Other Tools & 3rd party Library

-   only use PHPUnit installed using composer init

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
