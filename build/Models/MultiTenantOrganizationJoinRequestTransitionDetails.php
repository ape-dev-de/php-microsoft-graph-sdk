<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationJoinRequestTransitionDetails
 */
class MultiTenantOrganizationJoinRequestTransitionDetails
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * State of the tenant in the multitenant organization currently being processed. The possible values are: pending, active, removed, unknownFutureValue. Read-only.
     * @var MultiTenantOrganizationMemberState|\stdClass|null
     */
    public mixed $desiredMemberState = null;

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
        $this->rawData = $data;
        if (isset($data['desiredMemberState'])) {
            $this->desiredMemberState = is_array($data['desiredMemberState']) ? new MultiTenantOrganizationMemberState($data['desiredMemberState']) : $data['desiredMemberState'];
        }
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new MultiTenantOrganizationMemberProcessingStatus($data['status']) : $data['status'];
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
