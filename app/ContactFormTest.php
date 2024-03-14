<?php

use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    public function testContactFormSubmission()
    {
        $_POST["name"] = "John Doe";
        $_POST["email"] = "john@example.com";
        $_POST["message"] = "This is a test message.";

        ob_start();
        include 'process_contact.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("Thank you, John Doe!", $output);
        $this->assertStringContainsString("Email: john@example.com", $output);
        $this->assertStringContainsString("Message: This is a test message.", $output);
    }
}
