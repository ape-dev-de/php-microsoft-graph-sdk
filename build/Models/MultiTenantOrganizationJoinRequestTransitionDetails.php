<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationJoinRequestTransitionDetails
 */
class MultiTenantOrganizationJoinRequestTransitionDetails
{
    public function __construct(
        /** State of the tenant in the multitenant organization currently being processed. The possible values are: pending, active, removed, unknownFutureValue. Read-only. */
        public ?MultiTenantOrganizationMemberState $desiredMemberState = null,
        /** Details that explain the processing status if any. Read-only. */
        public ?string $details = null,
        /** Processing state of the asynchronous job. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. Read-only. */
        public ?MultiTenantOrganizationMemberProcessingStatus $status = null
    ) {}
}
