<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequiredResourceAccess
 */
class RequiredResourceAccess
{
    public function __construct(
        /** The list of OAuth2.0 permission scopes and app roles that the application requires from the specified resource. */
        public array $resourceAccess = [],
        /** The unique identifier for the resource that the application requires access to. This should be equal to the appId declared on the target resource application. */
        public ?string $resourceAppId = null
    ) {}
}
