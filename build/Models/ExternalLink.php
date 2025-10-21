<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalLink
 */
class ExternalLink
{
    public function __construct(
        /** The URL of the link. */
        public ?string $href = null
    ) {}
}
