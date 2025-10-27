<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceSettingState
 */
class DeviceComplianceSettingState
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The DateTime when device compliance grace period expires */
    public ?\DateTimeInterface $complianceGracePeriodExpirationDateTime = null;

    /** The Device Id that is being reported */
    public ?string $deviceId = null;

    /** The device model that is being reported */
    public ?string $deviceModel = null;

    /** The Device Name that is being reported */
    public ?string $deviceName = null;

    /** The setting class name and property name. */
    public ?string $setting = null;

    /** The Setting Name that is being reported */
    public ?string $settingName = null;

    /**  */
    public ?ComplianceStatus $state = null;

    /** The User email address that is being reported */
    public ?string $userEmail = null;

    /** The user Id that is being reported */
    public ?string $userId = null;

    /** The User Name that is being reported */
    public ?string $userName = null;

    /** The User PrincipalName that is being reported */
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
        if (isset($data['complianceGracePeriodExpirationDateTime'])) {
            $this->complianceGracePeriodExpirationDateTime = is_string($data['complianceGracePeriodExpirationDateTime']) ? new \DateTimeImmutable($data['complianceGracePeriodExpirationDateTime']) : $data['complianceGracePeriodExpirationDateTime'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['deviceModel'])) {
            $this->deviceModel = $data['deviceModel'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['setting'])) {
            $this->setting = $data['setting'];
        }
        if (isset($data['settingName'])) {
            $this->settingName = $data['settingName'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new ComplianceStatus($data['state']) : $data['state'];
        }
        if (isset($data['userEmail'])) {
            $this->userEmail = $data['userEmail'];
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

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
