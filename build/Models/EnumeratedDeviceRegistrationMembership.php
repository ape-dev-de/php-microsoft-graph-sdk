<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnumeratedDeviceRegistrationMembership
 */
class EnumeratedDeviceRegistrationMembership
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['groups'])) {
            $this->groups = $data['groups'];
        }
        if (isset($data['users'])) {
            $this->users = $data['users'];
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
