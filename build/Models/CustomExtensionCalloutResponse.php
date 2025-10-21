<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionCalloutResponse
 */
class CustomExtensionCalloutResponse
{
    public function __construct(
        /** Contains the data the external system provides to the custom extension endpoint. */
        public ?CustomExtensionData $data = null,
        /** Identifies the external system or event context related to the response. */
        public ?string $source = null,
        /** Describes the type of event related to the response. */
        public ?string $type = null
    ) {}
}
