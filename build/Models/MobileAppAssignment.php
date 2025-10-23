<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppAssignment
 */
class MobileAppAssignment
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?InstallIntent $intent = null;

    /** 
     * The settings for target assignment defined by the admin.
     * @var MobileAppAssignmentSettings|\stdClass|null
     */
    public mixed $settings = null;

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
        if (isset($data['intent'])) {
            $this->intent = $data['intent'];
        }
        if (isset($data['settings'])) {
            $this->settings = $data['settings'];
        }
        if (isset($data['target'])) {
            $this->target = $data['target'];
        }
    }
}
