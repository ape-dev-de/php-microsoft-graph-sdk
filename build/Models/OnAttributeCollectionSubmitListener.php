<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAttributeCollectionSubmitListener
 */
class OnAttributeCollectionSubmitListener
{
    public function __construct(
        /** Configuration for what to invoke if the event resolves to this listener. */
        public ?string $handler = null
    ) {}
}
