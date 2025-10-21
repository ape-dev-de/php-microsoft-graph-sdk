<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnInteractiveAuthFlowStartListener
 */
class OnInteractiveAuthFlowStartListener
{
    public function __construct(
        /** Required. Configuration for what to invoke if the event resolves to this listener. This lets us define potential handler configurations per-event. */
        public ?string $handler = null
    ) {}
}
