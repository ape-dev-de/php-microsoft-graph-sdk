<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Request
 */
class Request
{
    public function __construct(
        /** The identifier of the approval of the request. */
        public ?string $approvalId = null,
        /** The request completion date time. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The principal that created the request. */
        public ?string $createdBy = null,
        /** The request creation date time. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Free text field to define any custom data for the request. Not used. */
        public ?string $customData = null,
        /** The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. */
        public ?string $status = null
    ) {}
}
