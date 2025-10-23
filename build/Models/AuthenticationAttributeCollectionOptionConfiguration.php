<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionOptionConfiguration
 */
class AuthenticationAttributeCollectionOptionConfiguration
{
    /** The label of the option that will be displayed to user, unless overridden. */
    public ?string $label = null;

    /** The value of the option that will be stored. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['label'])) {
            $this->label = $data['label'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
