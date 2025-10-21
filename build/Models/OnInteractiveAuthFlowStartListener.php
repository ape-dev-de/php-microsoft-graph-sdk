<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnInteractiveAuthFlowStartListener
 */
class OnInteractiveAuthFlowStartListener
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identifier of the authenticationEventsFlow object. */
        public ?string $authenticationEventsFlowId = null,
        /** The conditions on which this authenticationEventListener should trigger. */
        public ?AuthenticationConditions $conditions = null,
        /** Required. Configuration for what to invoke if the event resolves to this listener. This lets us define potential handler configurations per-event. */
        public ?OnInteractiveAuthFlowStartHandler $handler = null
    ) {}
}
