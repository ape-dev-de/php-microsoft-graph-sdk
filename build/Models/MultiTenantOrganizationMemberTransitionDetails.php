<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationMemberTransitionDetails
 */
class MultiTenantOrganizationMemberTransitionDetails
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Role of the tenant in the multitenant organization. The possible values are: owner, member, unknownFutureValue.
     * @var MultiTenantOrganizationMemberRole|\stdClass|null
     */
    public MultiTenantOrganizationMemberRole|\stdClass|null $desiredRole = null;

    /** 
     * State of the tenant in the multitenant organization currently being processed. The possible values are: pending, active, removed, unknownFutureValue. Read-only.
     * @var MultiTenantOrganizationMemberState|\stdClass|null
     */
    public MultiTenantOrganizationMemberState|\stdClass|null $desiredState = null;

    /** Details that explain the processing status if any. Read-only. */
    public ?string $details = null;

    /** 
     * Processing state of the asynchronous job. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. Read-only.
     * @var MultiTenantOrganizationMemberProcessingStatus|\stdClass|null
     */
    public MultiTenantOrganizationMemberProcessingStatus|\stdClass|null $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['desiredRole'])) {
            $this->desiredRole = is_string($data['desiredRole']) ? MultiTenantOrganizationMemberRole::tryFrom($data['desiredRole']) : $data['desiredRole'];
        }
        if (isset($data['desiredState'])) {
            $this->desiredState = is_string($data['desiredState']) ? MultiTenantOrganizationMemberState::tryFrom($data['desiredState']) : $data['desiredState'];
        }
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? MultiTenantOrganizationMemberProcessingStatus::tryFrom($data['status']) : $data['status'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
