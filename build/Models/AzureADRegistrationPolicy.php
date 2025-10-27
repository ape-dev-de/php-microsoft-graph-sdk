<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureADRegistrationPolicy
 */
class AzureADRegistrationPolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var DeviceRegistrationMembership|\stdClass|null
     */
    public DeviceRegistrationMembership|\stdClass|null $allowedToRegister = null;

    /**  */
    public ?bool $isAdminConfigurable = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowedToRegister'])) {
            $this->allowedToRegister = is_array($data['allowedToRegister']) ? new DeviceRegistrationMembership($data['allowedToRegister']) : $data['allowedToRegister'];
        }
        if (isset($data['isAdminConfigurable'])) {
            $this->isAdminConfigurable = is_bool($data['isAdminConfigurable']) ? $data['isAdminConfigurable'] : (bool)$data['isAdminConfigurable'];
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
