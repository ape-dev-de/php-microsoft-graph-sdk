<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionCalloutRequest
 */
class CustomExtensionCalloutRequest
{
    public function __construct(
        /** Contains the data that will be provided to the external system. */
        public ?string $data = null,
        /** Identifies the source system or event context related to the callout request. */
        public ?string $source = null,
        /** Describes the type of event related to the callout request. */
        public ?string $type = null
    ) {}
}
