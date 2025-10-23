<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosUpdateDeviceStatus
 */
class IosUpdateDeviceStatus
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The DateTime when device compliance grace period expires */
    public ?\DateTimeInterface $complianceGracePeriodExpirationDateTime = null;

    /** Device name of the DevicePolicyStatus. */
    public ?string $deviceDisplayName = null;

    /** The device id that is being reported. */
    public ?string $deviceId = null;

    /** The device model that is being reported */
    public ?string $deviceModel = null;

    /**  */
    public ?IosUpdatesInstallStatus $installStatus = null;

    /** Last modified date time of the policy report. */
    public ?\DateTimeInterface $lastReportedDateTime = null;

    /** The device version that is being reported. */
    public ?string $osVersion = null;

    /**  */
    public ?ComplianceStatus $status = null;

    /** The User id that is being reported. */
    public ?string $userId = null;

    /** The User Name that is being reported */
    public ?string $userName = null;

    /** UserPrincipalName. */
    public ?string $userPrincipalName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['complianceGracePeriodExpirationDateTime'])) {
            $this->complianceGracePeriodExpirationDateTime = is_string($data['complianceGracePeriodExpirationDateTime']) ? new \DateTimeImmutable($data['complianceGracePeriodExpirationDateTime']) : $data['complianceGracePeriodExpirationDateTime'];
        }
        if (isset($data['deviceDisplayName'])) {
            $this->deviceDisplayName = $data['deviceDisplayName'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['deviceModel'])) {
            $this->deviceModel = $data['deviceModel'];
        }
        if (isset($data['installStatus'])) {
            $this->installStatus = is_array($data['installStatus']) ? new IosUpdatesInstallStatus($data['installStatus']) : $data['installStatus'];
        }
        if (isset($data['lastReportedDateTime'])) {
            $this->lastReportedDateTime = is_string($data['lastReportedDateTime']) ? new \DateTimeImmutable($data['lastReportedDateTime']) : $data['lastReportedDateTime'];
        }
        if (isset($data['osVersion'])) {
            $this->osVersion = $data['osVersion'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new ComplianceStatus($data['status']) : $data['status'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
        if (isset($data['userName'])) {
            $this->userName = $data['userName'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
    }
}
