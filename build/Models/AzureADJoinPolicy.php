<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureADJoinPolicy
 */
class AzureADJoinPolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var DeviceRegistrationMembership|\stdClass|null
     */
    public DeviceRegistrationMembership|\stdClass|null $allowedToJoin = null;

    /**  */
    public ?bool $isAdminConfigurable = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowedToJoin'])) {
            $this->allowedToJoin = is_array($data['allowedToJoin']) ? new DeviceRegistrationMembership($data['allowedToJoin']) : $data['allowedToJoin'];
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
