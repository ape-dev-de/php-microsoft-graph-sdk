<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationMemberTransitionDetails
 */
class MultiTenantOrganizationMemberTransitionDetails
{
    public function __construct(
        /** Role of the tenant in the multitenant organization. The possible values are: owner, member, unknownFutureValue. */
        public ?string $desiredRole = null,
        /** State of the tenant in the multitenant organization currently being processed. The possible values are: pending, active, removed, unknownFutureValue. Read-only. */
        public ?string $desiredState = null,
        /** Details that explain the processing status if any. Read-only. */
        public ?string $details = null,
        /** Processing state of the asynchronous job. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. Read-only. */
        public ?string $status = null
    ) {}
}
