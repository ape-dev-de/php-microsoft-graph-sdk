<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnumeratedDeviceRegistrationMembership
 */
class EnumeratedDeviceRegistrationMembership
{
    /** 
     * 
     * @var string[]
     */
    public array $groups = [];

    /** 
     * 
     * @var string[]
     */
    public array $users = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['groups'])) {
            $this->groups = $data['groups'];
        }
        if (isset($data['users'])) {
            $this->users = $data['users'];
        }
    }
}
