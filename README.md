# Terms & Condition Generator

## Overview

This is is a simplified app for Terms & Condition Generator based on iubenda tasks, that can able to generate template when executed using command line based on the instruction for take home challenge.

This support phpunit named TermsGeneratorTest.php that you can run also in the terminal

This simple app was made using PHP 8.2.4. Be sure to check their documentation.

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

    **Sample Output based on template.txt**

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
    composer test  // OR

    ./vendor/bin/phpunit tests/TermsGeneratorTest.php // OR

    ./vendor/bin/phpunit tests
    ```

## Non-Functional Requirements

#### Design Decisions

-   Code Best Practice: Implement PHP logic for clarity and maintainability using OO Concepts, maintain mehod types and strict declaration.

-   File Data Structure: The application is structured to separate data which is clauses and sections for data of Terms & Conditions, the template which contains the format of the dummy Terms & Conditions.

-   Flexibility: The TermsGenerator class is designed to be reusable with any dataset and template conforming to the specified format.

-   Testing: PHPUnit is used to ensure the functionality works as expected and to prevent regressions.

#### Development Time for Development

-   The time i consume on this application for development is approximately almost 8 hours, including project setup, data analyzation, project planning, composer installation for PHPUnit Testing (since i dont have installed Testing Tool here on my local).

#### Future Enhancement if i have given type

-   Create Good Web Interface and User Experience for this Terms & Condition Generator for input and manage templates and datasets with the following:
    -   add HTML Structure for Layout,
    -   Button for generator,
    -   responsive forms which you can input your username and email before the user generates the Terms & Conditions,
    -   Pop-up modal for the Generated terms & conditions,
    -   Designed Terms & Conditions Document
-   Add more robust error handling for missing or malformed data.
-   Support more complex tag types or additional formatting options.

### Running the Application

To run the application, follow the steps outlined in the `README.md` under Setup and Usage. This includes installing dependencies using Composer, generating the document via the command line, and running PHPUnit tests to verify functionality.

This setup should provide a complete, functional, and testable Terms & Conditions Generator using PHP, adhering to the specified requirements.

## Other Tools & 3rd party Library

-   only use PHPUnit, installed using composer init

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
