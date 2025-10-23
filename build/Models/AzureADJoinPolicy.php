<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureADJoinPolicy
 */
class AzureADJoinPolicy
{
    /** 
     * 
     * @var DeviceRegistrationMembership|\stdClass|null
     */
    public mixed $allowedToJoin = null;

    /**  */
    public ?bool $isAdminConfigurable = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowedToJoin'])) {
            $this->allowedToJoin = is_array($data['allowedToJoin']) ? new DeviceRegistrationMembership($data['allowedToJoin']) : $data['allowedToJoin'];
        }
        if (isset($data['isAdminConfigurable'])) {
            $this->isAdminConfigurable = $data['isAdminConfigurable'];
        }
    }
}
