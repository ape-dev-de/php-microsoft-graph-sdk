<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceManagementPartnerAssignment
 */
class ComplianceManagementPartnerAssignment
{
    /** 
     * Group assignment target.
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
            $this->target = is_array($data['target']) ? new DeviceAndAppManagementAssignmentTarget($data['target']) : $data['target'];
        }
    }
}
