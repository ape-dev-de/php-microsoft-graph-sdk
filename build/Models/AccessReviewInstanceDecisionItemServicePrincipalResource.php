<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemServicePrincipalResource
 */
class AccessReviewInstanceDecisionItemServicePrincipalResource
{
    public function __construct(
        /** The globally unique identifier of the application to which access has been granted. */
        public ?string $appId = null
    ) {}
}
