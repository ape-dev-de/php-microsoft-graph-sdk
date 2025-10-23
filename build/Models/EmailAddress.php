<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailAddress
 */
class EmailAddress
{
    /** The email address of the person or entity. */
    public ?string $address = null;

    /** The display name of the person or entity. */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['address'])) {
            $this->address = $data['address'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
    }
}
