<?php

namespace tests\unit;

use Codeception\Test\Unit;
use app\controllers\EntryForm;

class EntryFormTest extends Unit
{
    public function testValidation()
    {
        // Valid case
        $model = new EntryForm();
        $model->name = 'John Doe';
        $model->email = 'john.doe@example.com';

        // Ensure the form is valid
        $this->assertTrue($model->validate());

        // Invalid name (less than 2 characters)
        $model->name = 'J';
        $model->email = 'john.doe@example.com';

        // Ensure validation fails for short name
        $this->assertFalse($model->validate());

        // Invalid email (incorrect format)
        $model->name = 'John Doe';
        $model->email = 'invalid-email';

        // Ensure validation fails for invalid email
        $this->assertFalse($model->validate());

        // Invalid name (contains non-letter characters)
        $model->name = 'John123';
        $model->email = 'john.doe@example.com';

        // Ensure validation fails for invalid name
        $this->assertFalse($model->validate());
    }
}
