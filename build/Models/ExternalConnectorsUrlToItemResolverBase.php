<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsUrlToItemResolverBase
 */
class ExternalConnectorsUrlToItemResolverBase
{
    public function __construct(
        /** The priority which defines the sequence in which the urlToItemResolverBase instances are evaluated. */
        public ?string $priority = null
    ) {}
}
