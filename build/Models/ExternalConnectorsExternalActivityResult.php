<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalActivityResult
 */
class ExternalConnectorsExternalActivityResult
{
    public function __construct(
        /** Error information that explains the failure to process an external activity. */
        public ?string $error = null
    ) {}
}
