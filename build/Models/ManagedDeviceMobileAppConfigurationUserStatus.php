<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceMobileAppConfigurationUserStatus
 */
class ManagedDeviceMobileAppConfigurationUserStatus
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Devices count for that user. */
    public ?float $devicesCount = null;

    /** Last modified date time of the policy report. */
    public ?\DateTimeInterface $lastReportedDateTime = null;

    /**  */
    public ?ComplianceStatus $status = null;

    /** User name of the DevicePolicyStatus. */
    public ?string $userDisplayName = null;

    /** UserPrincipalName. */
    public ?string $userPrincipalName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['devicesCount'])) {
            $this->devicesCount = $data['devicesCount'];
        }
        if (isset($data['lastReportedDateTime'])) {
            $this->lastReportedDateTime = is_string($data['lastReportedDateTime']) ? new \DateTimeImmutable($data['lastReportedDateTime']) : $data['lastReportedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new ComplianceStatus($data['status']) : $data['status'];
        }
        if (isset($data['userDisplayName'])) {
            $this->userDisplayName = $data['userDisplayName'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
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
