<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementPartnerAssignment
 */
class DeviceManagementPartnerAssignment
{
    /** 
     * User groups targeting for devices to be enrolled through partner.
     * @var DeviceAndAppManagementAssignmentTarget|\stdClass|null
     */
    public mixed $target = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['target'])) {
            $this->target = $data['target'];
        }
    }
}
