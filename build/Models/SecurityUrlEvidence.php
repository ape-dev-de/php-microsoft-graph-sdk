<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUrlEvidence
 */
class SecurityUrlEvidence
{
    public function __construct(
        /** The Unique Resource Locator (URL). */
        public ?string $url = null
    ) {}
}
