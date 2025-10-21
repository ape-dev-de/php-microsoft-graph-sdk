<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteItem
 */
class RemoteItem
{
    /**
     * Identity of the user, device, and application which created the item. Read-only.
     */
    private ?string $createdBy;

    /**
     * Date and time of item creation. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Indicates that the remote item is a file. Read-only.
     */
    private ?string $file;

    /**
     * Information about the remote item from the local file system. Read-only.
     */
    private ?string $fileSystemInfo;

    /**
     * Indicates that the remote item is a folder. Read-only.
     */
    private ?string $folder;

    /**
     * Unique identifier for the remote item in its drive. Read-only.
     */
    private ?string $id;

    /**
     * Image metadata, if the item is an image. Read-only.
     */
    private ?string $image;

    /**
     * Identity of the user, device, and application which last modified the item. Read-only.
     */
    private ?string $lastModifiedBy;

    /**
     * Date and time the item was last modified. Read-only.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Optional. Filename of the remote item. Read-only.
     */
    private ?string $name;

    /**
     * If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
     */
    private ?string $package;

    /**
     * Properties of the parent of the remote item. Read-only.
     */
    private ?string $parentReference;

    /**
     * Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
     */
    private ?string $shared;

    /**
     * Provides interop between items in OneDrive for Business and SharePoint with the full set of item identifiers. Read-only.
     */
    private ?string $sharepointIds;

    /**
     * Size of the remote item. Read-only.
     */
    private ?float $size;

    /**
     * If the current item is also available as a special folder, this facet is returned. Read-only.
     */
    private ?string $specialFolder;

    /**
     * Video metadata, if the item is a video. Read-only.
     */
    private ?string $video;

    /**
     * DAV compatible URL for the item.
     */
    private ?string $webDavUrl;

    /**
     * URL that displays the resource in the browser. Read-only.
     */
    private ?string $webUrl;


    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): self
    {
        $this->file = $file;
        return $this;
    }

    public function getFileSystemInfo(): ?string
    {
        return $this->fileSystemInfo;
    }

    public function setFileSystemInfo(?string $fileSystemInfo): self
    {
        $this->fileSystemInfo = $fileSystemInfo;
        return $this;
    }

    public function getFolder(): ?string
    {
        return $this->folder;
    }

    public function setFolder(?string $folder): self
    {
        $this->folder = $folder;
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
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

    public function getPackage(): ?string
    {
        return $this->package;
    }

    public function setPackage(?string $package): self
    {
        $this->package = $package;
        return $this;
    }

    public function getParentReference(): ?string
    {
        return $this->parentReference;
    }

    public function setParentReference(?string $parentReference): self
    {
        $this->parentReference = $parentReference;
        return $this;
    }

    public function getShared(): ?string
    {
        return $this->shared;
    }

    public function setShared(?string $shared): self
    {
        $this->shared = $shared;
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

    public function getSize(): ?float
    {
        return $this->size;
    }

    public function setSize(?float $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function getSpecialFolder(): ?string
    {
        return $this->specialFolder;
    }

    public function setSpecialFolder(?string $specialFolder): self
    {
        $this->specialFolder = $specialFolder;
        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;
        return $this;
    }

    public function getWebDavUrl(): ?string
    {
        return $this->webDavUrl;
    }

    public function setWebDavUrl(?string $webDavUrl): self
    {
        $this->webDavUrl = $webDavUrl;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

}
