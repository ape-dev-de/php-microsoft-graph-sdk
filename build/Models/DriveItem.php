<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItem
 */
class DriveItem
{
    /**
     * Audio metadata, if the item is an audio file. Read-only. Read-only. Only on OneDrive Personal.
     */
    private ?string $audio;

    /**
     * Bundle metadata, if the item is a bundle. Read-only.
     */
    private ?string $bundle;

    /**
     * The content stream, if the item represents a file.
     */
    private ?string $content;

    /**
     * An eTag for the content of the item. This eTag isn't changed if only the metadata is changed. Note This property isn't returned if the item is a folder. Read-only.
     */
    private ?string $cTag;

    /**
     * Information about the deleted state of the item. Read-only.
     */
    private ?string $deleted;

    /**
     * File metadata, if the item is a file. Read-only.
     */
    private ?string $file;

    /**
     * File system information on client. Read-write.
     */
    private ?string $fileSystemInfo;

    /**
     * Folder metadata, if the item is a folder. Read-only.
     */
    private ?string $folder;

    /**
     * Image metadata, if the item is an image. Read-only.
     */
    private ?string $image;

    /**
     * Location metadata, if the item has location data. Read-only.
     */
    private ?string $location;

    /**
     * Malware metadata, if the item was detected to contain malware. Read-only.
     */
    private ?string $malware;

    /**
     * If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
     */
    private ?string $package;

    /**
     * If present, indicates that one or more operations that might affect the state of the driveItem are pending completion. Read-only.
     */
    private ?string $pendingOperations;

    /**
     * Photo metadata, if the item is a photo. Read-only.
     */
    private ?string $photo;

    /**
     * Provides information about the published or checked-out state of an item, in locations that support such actions. This property isn''t returned by default. Read-only.
     */
    private ?string $publication;

    /**
     * Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.
     */
    private ?string $remoteItem;

    /**
     * If this property is non-null, it indicates that the driveItem is the top-most driveItem in the drive.
     */
    private ?string $root;

    /**
     * Search metadata, if the item is from a search result. Read-only.
     */
    private ?string $searchResult;

    /**
     * Indicates that the item was shared with others and provides information about the shared state of the item. Read-only.
     */
    private ?string $shared;

    /**
     * Returns identifiers useful for SharePoint REST compatibility. Read-only.
     */
    private ?string $sharepointIds;

    /**
     * Size of the item in bytes. Read-only.
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
     * WebDAV compatible URL for the item.
     */
    private ?string $webDavUrl;

    /**
     * Analytics about the view activities that took place on this item.
     */
    private ?string $analytics;

    /**
     * Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.
     */
    private array $children = [];

    /**
     * For drives in SharePoint, the associated document library list item. Read-only. Nullable.
     */
    private ?string $listItem;

    /**
     * The set of permissions for the item. Read-only. Nullable.
     */
    private array $permissions = [];

    /**
     * Information about retention label and settings enforced on the driveItem. Read-write.
     */
    private ?string $retentionLabel;

    /**
     * The set of subscriptions on the item. Only supported on the root of a drive.
     */
    private array $subscriptions = [];

    /**
     * Collection of thumbnailSet objects associated with the item. For more information, see getting thumbnails. Read-only. Nullable.
     */
    private array $thumbnails = [];

    /**
     * The list of previous versions of the item. For more info, see getting previous versions. Read-only. Nullable.
     */
    private array $versions = [];

    /**
     * For files that are Excel spreadsheets, access to the workbook API to work with the spreadsheet''s contents. Nullable.
     */
    private ?string $workbook;

    public function getAudio(): ?string
    {
        return $this->audio;
    }

    public function setAudio(?string $audio): self
    {
        $this->audio = $audio;
        return $this;
    }

    public function getBundle(): ?string
    {
        return $this->bundle;
    }

    public function setBundle(?string $bundle): self
    {
        $this->bundle = $bundle;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getCTag(): ?string
    {
        return $this->cTag;
    }

    public function setCTag(?string $cTag): self
    {
        $this->cTag = $cTag;
        return $this;
    }

    public function getDeleted(): ?string
    {
        return $this->deleted;
    }

    public function setDeleted(?string $deleted): self
    {
        $this->deleted = $deleted;
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getMalware(): ?string
    {
        return $this->malware;
    }

    public function setMalware(?string $malware): self
    {
        $this->malware = $malware;
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

    public function getPendingOperations(): ?string
    {
        return $this->pendingOperations;
    }

    public function setPendingOperations(?string $pendingOperations): self
    {
        $this->pendingOperations = $pendingOperations;
        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;
        return $this;
    }

    public function getPublication(): ?string
    {
        return $this->publication;
    }

    public function setPublication(?string $publication): self
    {
        $this->publication = $publication;
        return $this;
    }

    public function getRemoteItem(): ?string
    {
        return $this->remoteItem;
    }

    public function setRemoteItem(?string $remoteItem): self
    {
        $this->remoteItem = $remoteItem;
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

    public function getSearchResult(): ?string
    {
        return $this->searchResult;
    }

    public function setSearchResult(?string $searchResult): self
    {
        $this->searchResult = $searchResult;
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

    public function getAnalytics(): ?string
    {
        return $this->analytics;
    }

    public function setAnalytics(?string $analytics): self
    {
        $this->analytics = $analytics;
        return $this;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function setChildren(array $children): self
    {
        $this->children = $children;
        return $this;
    }

    public function getListItem(): ?string
    {
        return $this->listItem;
    }

    public function setListItem(?string $listItem): self
    {
        $this->listItem = $listItem;
        return $this;
    }

    public function getPermissions(): array
    {
        return $this->permissions;
    }

    public function setPermissions(array $permissions): self
    {
        $this->permissions = $permissions;
        return $this;
    }

    public function getRetentionLabel(): ?string
    {
        return $this->retentionLabel;
    }

    public function setRetentionLabel(?string $retentionLabel): self
    {
        $this->retentionLabel = $retentionLabel;
        return $this;
    }

    public function getSubscriptions(): array
    {
        return $this->subscriptions;
    }

    public function setSubscriptions(array $subscriptions): self
    {
        $this->subscriptions = $subscriptions;
        return $this;
    }

    public function getThumbnails(): array
    {
        return $this->thumbnails;
    }

    public function setThumbnails(array $thumbnails): self
    {
        $this->thumbnails = $thumbnails;
        return $this;
    }

    public function getVersions(): array
    {
        return $this->versions;
    }

    public function setVersions(array $versions): self
    {
        $this->versions = $versions;
        return $this;
    }

    public function getWorkbook(): ?string
    {
        return $this->workbook;
    }

    public function setWorkbook(?string $workbook): self
    {
        $this->workbook = $workbook;
        return $this;
    }

}
