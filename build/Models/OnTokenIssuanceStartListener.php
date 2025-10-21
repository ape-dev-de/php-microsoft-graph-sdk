<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartListener
 */
class OnTokenIssuanceStartListener
{
    public function __construct(
        /** The handler to invoke when conditions are met for this onTokenIssuanceStartListener. */
        public ?string $handler = null
    ) {}
}
