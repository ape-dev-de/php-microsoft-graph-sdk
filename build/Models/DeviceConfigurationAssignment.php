<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationAssignment
 */
class DeviceConfigurationAssignment
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The assignment target for the device configuration.
     * @var DeviceAndAppManagementAssignmentTarget|\stdClass|null
     */
    public mixed $target = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['target'])) {
            $this->target = $data['target'];
        }
    }
}
