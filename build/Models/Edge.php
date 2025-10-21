<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Edge
 */
class Edge
{
    public function __construct(
        /** A container for Internet Explorer mode resources. */
        public ?string $internetExplorerMode = null
    ) {}
}
