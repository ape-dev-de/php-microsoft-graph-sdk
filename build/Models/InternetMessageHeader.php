<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InternetMessageHeader
 */
class InternetMessageHeader
{
    /** Represents the key in a key-value pair. */
    public ?string $name = null;

    /** The value in a key-value pair. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
