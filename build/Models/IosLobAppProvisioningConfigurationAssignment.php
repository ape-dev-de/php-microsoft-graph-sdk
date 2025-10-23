<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosLobAppProvisioningConfigurationAssignment
 */
class IosLobAppProvisioningConfigurationAssignment
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The target group assignment defined by the admin.
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
