<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceRegistrationPolicy
 */
class DeviceRegistrationPolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var AzureADJoinPolicy|\stdClass|null
     */
    public AzureADJoinPolicy|\stdClass|null $azureADJoin = null;

    /** 
     * 
     * @var AzureADRegistrationPolicy|\stdClass|null
     */
    public AzureADRegistrationPolicy|\stdClass|null $azureADRegistration = null;

    /**  */
    public ?string $description = null;

    /**  */
    public ?string $displayName = null;

    /** 
     * 
     * @var LocalAdminPasswordSettings|\stdClass|null
     */
    public LocalAdminPasswordSettings|\stdClass|null $localAdminPassword = null;

    /**  */
    public ?MultiFactorAuthConfiguration $multiFactorAuthConfiguration = null;

    /**  */
    public ?float $userDeviceQuota = null;


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
        if (isset($data['azureADJoin'])) {
            $this->azureADJoin = is_array($data['azureADJoin']) ? new AzureADJoinPolicy($data['azureADJoin']) : $data['azureADJoin'];
        }
        if (isset($data['azureADRegistration'])) {
            $this->azureADRegistration = is_array($data['azureADRegistration']) ? new AzureADRegistrationPolicy($data['azureADRegistration']) : $data['azureADRegistration'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['localAdminPassword'])) {
            $this->localAdminPassword = is_array($data['localAdminPassword']) ? new LocalAdminPasswordSettings($data['localAdminPassword']) : $data['localAdminPassword'];
        }
        if (isset($data['multiFactorAuthConfiguration'])) {
            $this->multiFactorAuthConfiguration = is_string($data['multiFactorAuthConfiguration']) ? MultiFactorAuthConfiguration::tryFrom($data['multiFactorAuthConfiguration']) : $data['multiFactorAuthConfiguration'];
        }
        if (isset($data['userDeviceQuota'])) {
            $this->userDeviceQuota = is_numeric($data['userDeviceQuota']) ? (float)$data['userDeviceQuota'] : $data['userDeviceQuota'];
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
