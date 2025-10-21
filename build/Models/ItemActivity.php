<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemActivity
 */
class ItemActivity
{
    /**
     * An item was accessed.
     */
    private ?string $access;

    /**
     * Details about when the activity took place. Read-only.
     */
    private ?\DateTimeInterface $activityDateTime;

    /**
     * Identity of who performed the action. Read-only.
     */
    private ?string $actor;

    /**
     * Exposes the driveItem that was the target of this activity.
     */
    private ?string $driveItem;


    public function getAccess(): ?string
    {
        return $this->access;
    }

    public function setAccess(?string $access): self
    {
        $this->access = $access;
        return $this;
    }

    public function getActivityDateTime(): ?\DateTimeInterface
    {
        return $this->activityDateTime;
    }

    public function setActivityDateTime(?\DateTimeInterface $activityDateTime): self
    {
        $this->activityDateTime = $activityDateTime;
        return $this;
    }

    public function getActor(): ?string
    {
        return $this->actor;
    }

    public function setActor(?string $actor): self
    {
        $this->actor = $actor;
        return $this;
    }

    public function getDriveItem(): ?string
    {
        return $this->driveItem;
    }

    public function setDriveItem(?string $driveItem): self
    {
        $this->driveItem = $driveItem;
        return $this;
    }

}
