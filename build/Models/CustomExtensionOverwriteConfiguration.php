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
        public ?CustomExtensionBehaviorOnError $behaviorOnError = null,
        /** Configuration regarding properties of the custom extension which can be overwritten per event listener. If no values are provided, the properties on the custom extension are used. */
        public ?CustomExtensionClientConfiguration $clientConfiguration = null
    ) {}
}
