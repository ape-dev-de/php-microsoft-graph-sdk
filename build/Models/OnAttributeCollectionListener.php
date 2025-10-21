<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAttributeCollectionListener
 */
class OnAttributeCollectionListener
{
    public function __construct(
        /** Required. Configuration for what to invoke if the event resolves to this listener. */
        public ?string $handler = null
    ) {}
}
