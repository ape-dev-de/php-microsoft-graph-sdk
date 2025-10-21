<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerCustomPropertyValue
 */
class FileStorageContainerCustomPropertyValue
{
    public function __construct(
        /** Indicates whether the custom property is searchable. Optional. The default value is false. */
        public ?bool $isSearchable = null,
        /** Value of the custom property. Required. */
        public ?string $value = null
    ) {}
}
