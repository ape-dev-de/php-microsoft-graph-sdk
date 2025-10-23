<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationMemberTransitionDetails
 */
class MultiTenantOrganizationMemberTransitionDetails
{
    /** 
     * Role of the tenant in the multitenant organization. The possible values are: owner, member, unknownFutureValue.
     * @var MultiTenantOrganizationMemberRole|\stdClass|null
     */
    public mixed $desiredRole = null;

    /** 
     * State of the tenant in the multitenant organization currently being processed. The possible values are: pending, active, removed, unknownFutureValue. Read-only.
     * @var MultiTenantOrganizationMemberState|\stdClass|null
     */
    public mixed $desiredState = null;

    /** Details that explain the processing status if any. Read-only. */
    public ?string $details = null;

    /** 
     * Processing state of the asynchronous job. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. Read-only.
     * @var MultiTenantOrganizationMemberProcessingStatus|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['desiredRole'])) {
            $this->desiredRole = $data['desiredRole'];
        }
        if (isset($data['desiredState'])) {
            $this->desiredState = $data['desiredState'];
        }
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
