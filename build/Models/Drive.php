<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Drive
 */
class Drive
{
    /**
     * Describes the type of drive represented by this resource. OneDrive personal drives return personal. OneDrive for Business returns business. SharePoint document libraries return documentLibrary. Read-only.
     */
    private ?string $driveType;

    /**
     * Optional. The user account that owns the drive. Read-only.
     */
    private ?string $owner;

    /**
     * Optional. Information about the drive's storage space quota. Read-only.
     */
    private ?string $quota;

    /**
     */
    private ?string $sharePointIds;

    /**
     * If present, indicates that it''s a system-managed drive. Read-only.
     */
    private ?string $system;

    /**
     * Collection of bundles (albums and multi-select-shared sets of items). Only in personal OneDrive.
     */
    private array $bundles = [];

    /**
     * The list of items the user is following. Only in OneDrive for Business.
     */
    private array $following = [];

    /**
     * All items contained in the drive. Read-only. Nullable.
     */
    private array $items = [];

    /**
     * For drives in SharePoint, the underlying document library list. Read-only. Nullable.
     */
    private ?string $list;

    /**
     * The root folder of the drive. Read-only.
     */
    private ?string $root;

    /**
     * Collection of common folders available in OneDrive. Read-only. Nullable.
     * @var string[]
     */
    private array $special = [];


    public function getDriveType(): ?string
    {
        return $this->driveType;
    }

    public function setDriveType(?string $driveType): self
    {
        $this->driveType = $driveType;
        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;
        return $this;
    }

    public function getQuota(): ?string
    {
        return $this->quota;
    }

    public function setQuota(?string $quota): self
    {
        $this->quota = $quota;
        return $this;
    }

    public function getSharePointIds(): ?string
    {
        return $this->sharePointIds;
    }

    public function setSharePointIds(?string $sharePointIds): self
    {
        $this->sharePointIds = $sharePointIds;
        return $this;
    }

    public function getSystem(): ?string
    {
        return $this->system;
    }

    public function setSystem(?string $system): self
    {
        $this->system = $system;
        return $this;
    }

    public function getBundles(): array
    {
        return $this->bundles;
    }

    public function setBundles(array $bundles): self
    {
        $this->bundles = $bundles;
        return $this;
    }

    public function getFollowing(): array
    {
        return $this->following;
    }

    public function setFollowing(array $following): self
    {
        $this->following = $following;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }

    public function getList(): ?string
    {
        return $this->list;
    }

    public function setList(?string $list): self
    {
        $this->list = $list;
        return $this;
    }

    public function getRoot(): ?string
    {
        return $this->root;
    }

    public function setRoot(?string $root): self
    {
        $this->root = $root;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSpecial(): array
    {
        return $this->special;
    }

    /**
     * @param string[] $special
     */
    public function setSpecial(array $special): self
    {
        $this->special = $special;
        return $this;
    }

}
