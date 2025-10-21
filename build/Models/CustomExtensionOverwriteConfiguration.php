<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionOverwriteConfiguration
 */
class CustomExtensionOverwriteConfiguration
{
    public function __construct(
        /**  */
        public ?string $behaviorOnError = null,
        /** Configuration regarding properties of the custom extension which can be overwritten per event listener. If no values are provided, the properties on the custom extension are used. */
        public ?string $clientConfiguration = null
    ) {}
}
