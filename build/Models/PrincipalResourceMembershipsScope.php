<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrincipalResourceMembershipsScope
 */
class PrincipalResourceMembershipsScope
{
    public function __construct(
        /** Defines the scopes of the principals whose access to resources are reviewed in the access review. */
        public array $principalScopes = [],
        /** Defines the scopes of the resources for which access is reviewed. */
        public array $resourceScopes = []
    ) {}
}
