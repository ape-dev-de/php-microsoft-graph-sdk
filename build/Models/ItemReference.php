<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemReference
 */
class ItemReference
{
    /**
     * Unique identifier of the drive instance that contains the driveItem. Only returned if the item is located in a drive. Read-only.
     */
    private ?string $driveId;

    /**
     * Identifies the type of drive. Only returned if the item is located in a drive. See drive resource for values.
     */
    private ?string $driveType;

    /**
     * Unique identifier of the driveItem in the drive or a listItem in a list. Read-only.
     */
    private ?string $id;

    /**
     * The name of the item being referenced. Read-only.
     */
    private ?string $name;

    /**
     * Percent-encoded path that can be used to navigate to the item. Read-only.
     */
    private ?string $path;

    /**
     * A unique identifier for a shared resource that can be accessed via the Shares API.
     */
    private ?string $shareId;

    /**
     * Returns identifiers useful for SharePoint REST compatibility. Read-only.
     */
    private ?string $sharepointIds;

    /**
     * For OneDrive for Business and SharePoint, this property represents the ID of the site that contains the parent document library of the driveItem resource or the parent list of the listItem resource. The value is the same as the id property of that site resource. It is an opaque string that consists of three identifiers of the site. For OneDrive, this property is not populated.
     */
    private ?string $siteId;

    public function getDriveId(): ?string
    {
        return $this->driveId;
    }

    public function setDriveId(?string $driveId): self
    {
        $this->driveId = $driveId;
        return $this;
    }

    public function getDriveType(): ?string
    {
        return $this->driveType;
    }

    public function setDriveType(?string $driveType): self
    {
        $this->driveType = $driveType;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }

    public function getShareId(): ?string
    {
        return $this->shareId;
    }

    public function setShareId(?string $shareId): self
    {
        $this->shareId = $shareId;
        return $this;
    }

    public function getSharepointIds(): ?string
    {
        return $this->sharepointIds;
    }

    public function setSharepointIds(?string $sharepointIds): self
    {
        $this->sharepointIds = $sharepointIds;
        return $this;
    }

    public function getSiteId(): ?string
    {
        return $this->siteId;
    }

    public function setSiteId(?string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

}
