<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserAttributeValuesItem
 */
class UserAttributeValuesItem
{
    /** Determines whether the value is set as the default. */
    public ?bool $isDefault = null;

    /** The display name of the property displayed to the user in the user flow. */
    public ?string $name = null;

    /** The value that is set when this item is selected. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isDefault'])) {
            $this->isDefault = $data['isDefault'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
