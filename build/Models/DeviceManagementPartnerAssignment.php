<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementPartnerAssignment
 */
class DeviceManagementPartnerAssignment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * User groups targeting for devices to be enrolled through partner.
     * @var DeviceAndAppManagementAssignmentTarget|\stdClass|null
     */
    public DeviceAndAppManagementAssignmentTarget|\stdClass|null $target = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['target'])) {
            $this->target = is_array($data['target']) ? new DeviceAndAppManagementAssignmentTarget($data['target']) : $data['target'];
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
