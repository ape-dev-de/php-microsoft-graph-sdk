<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartListener
 */
class OnTokenIssuanceStartListener
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identifier of the authenticationEventsFlow object. */
        public ?string $authenticationEventsFlowId = null,
        /** The conditions on which this authenticationEventListener should trigger. */
        public ?string $conditions = null,
        /** The handler to invoke when conditions are met for this onTokenIssuanceStartListener. */
        public ?string $handler = null
    ) {}
}
