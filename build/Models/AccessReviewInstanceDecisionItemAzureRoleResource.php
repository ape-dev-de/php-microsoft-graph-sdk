<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemAzureRoleResource
 */
class AccessReviewInstanceDecisionItemAzureRoleResource
{
    public function __construct(
        /** Details of the scope this role is associated with. */
        public ?string $scope = null
    ) {}
}
