<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAuthenticationMethodLoadStartListener
 */
class OnAuthenticationMethodLoadStartListener
{
    public function __construct(
        /** Required. Configuration for what to invoke if the event resolves to this listener. This property lets us define potential handler configurations per-event. */
        public ?string $handler = null
    ) {}
}
