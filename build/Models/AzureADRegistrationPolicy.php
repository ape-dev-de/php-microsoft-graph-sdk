<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureADRegistrationPolicy
 */
class AzureADRegistrationPolicy
{
    /** 
     * 
     * @var DeviceRegistrationMembership|\stdClass|null
     */
    public mixed $allowedToRegister = null;

    /**  */
    public ?bool $isAdminConfigurable = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowedToRegister'])) {
            $this->allowedToRegister = is_array($data['allowedToRegister']) ? new DeviceRegistrationMembership($data['allowedToRegister']) : $data['allowedToRegister'];
        }
        if (isset($data['isAdminConfigurable'])) {
            $this->isAdminConfigurable = $data['isAdminConfigurable'];
        }
    }
}
