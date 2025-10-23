<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceRegistrationPolicy
 */
class DeviceRegistrationPolicy
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var AzureADJoinPolicy|\stdClass|null
     */
    public mixed $azureADJoin = null;

    /** 
     * 
     * @var AzureADRegistrationPolicy|\stdClass|null
     */
    public mixed $azureADRegistration = null;

    /**  */
    public ?string $description = null;

    /**  */
    public ?string $displayName = null;

    /** 
     * 
     * @var LocalAdminPasswordSettings|\stdClass|null
     */
    public mixed $localAdminPassword = null;

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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['azureADJoin'])) {
            $this->azureADJoin = $data['azureADJoin'];
        }
        if (isset($data['azureADRegistration'])) {
            $this->azureADRegistration = $data['azureADRegistration'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['localAdminPassword'])) {
            $this->localAdminPassword = $data['localAdminPassword'];
        }
        if (isset($data['multiFactorAuthConfiguration'])) {
            $this->multiFactorAuthConfiguration = $data['multiFactorAuthConfiguration'];
        }
        if (isset($data['userDeviceQuota'])) {
            $this->userDeviceQuota = $data['userDeviceQuota'];
        }
    }
}
