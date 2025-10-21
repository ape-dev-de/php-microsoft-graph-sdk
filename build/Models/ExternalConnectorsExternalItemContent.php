<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalItemContent
 */
class ExternalConnectorsExternalItemContent
{
    public function __construct(
        /**  */
        public ?string $type = null,
        /** The content for the externalItem. Required. */
        public ?string $value = null
    ) {}
}
