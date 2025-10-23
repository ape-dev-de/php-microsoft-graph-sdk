<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerCustomPropertyValue
 */
class FileStorageContainerCustomPropertyValue
{
    /** Indicates whether the custom property is searchable. Optional. The default value is false. */
    public ?bool $isSearchable = null;

    /** Value of the custom property. Required. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isSearchable'])) {
            $this->isSearchable = $data['isSearchable'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
