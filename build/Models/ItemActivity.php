<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemActivity
 */
class ItemActivity
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * An item was accessed.
     * @var AccessAction|\stdClass|null
     */
    public mixed $access = null;

    /** Details about when the activity took place. Read-only. */
    public ?\DateTimeInterface $activityDateTime = null;

    /** 
     * Identity of who performed the action. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $actor = null;

    /** 
     * Exposes the driveItem that was the target of this activity.
     * @var DriveItem|\stdClass|null
     */
    public mixed $driveItem = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['access'])) {
            $this->access = $data['access'];
        }
        if (isset($data['activityDateTime'])) {
            $this->activityDateTime = $data['activityDateTime'];
        }
        if (isset($data['actor'])) {
            $this->actor = $data['actor'];
        }
        if (isset($data['driveItem'])) {
            $this->driveItem = $data['driveItem'];
        }
    }
}
