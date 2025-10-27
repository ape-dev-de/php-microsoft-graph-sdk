<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppAssignment
 */
class MobileAppAssignment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?InstallIntent $intent = null;

    /** 
     * The settings for target assignment defined by the admin.
     * @var MobileAppAssignmentSettings|\stdClass|null
     */
    public MobileAppAssignmentSettings|\stdClass|null $settings = null;

    /** 
     * The target group assignment defined by the admin.
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['intent'])) {
            $this->intent = is_string($data['intent']) ? InstallIntent::tryFrom($data['intent']) : $data['intent'];
        }
        if (isset($data['settings'])) {
            $this->settings = is_array($data['settings']) ? new MobileAppAssignmentSettings($data['settings']) : $data['settings'];
        }
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
