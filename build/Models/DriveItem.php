<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItem
 */
class DriveItem
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the user, device, or application that created the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Date and time of item creation. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Provides a user-visible description of the item. Optional. */
    public ?string $description = null;

    /** ETag for the item. Read-only. */
    public ?string $eTag = null;

    /** 
     * Identity of the user, device, and application that last modified the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Date and time the item was last modified. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The name of the item. Read-write. */
    public ?string $name = null;

    /** 
     * Parent information, if the item has a parent. Read-write.
     * @var ItemReference|\stdClass|null
     */
    public mixed $parentReference = null;

    /** URL that either displays the resource in the browser (for Office file formats), or is a direct link to the file (for other formats). Read-only. */
    public ?string $webUrl = null;

    /** 
     * Identity of the user who created the item. Read-only.
     * @var User|\stdClass|null
     */
    public mixed $createdByUser = null;

    /** 
     * Identity of the user who last modified the item. Read-only.
     * @var User|\stdClass|null
     */
    public mixed $lastModifiedByUser = null;

    /** 
     * Audio metadata, if the item is an audio file. Read-only. Read-only. Only on OneDrive Personal.
     * @var Audio|\stdClass|null
     */
    public mixed $audio = null;

    /** 
     * Bundle metadata, if the item is a bundle. Read-only.
     * @var Bundle|\stdClass|null
     */
    public mixed $bundle = null;

    /** The content stream, if the item represents a file. */
    public ?string $content = null;

    /** An eTag for the content of the item. This eTag isn't changed if only the metadata is changed. Note This property isn't returned if the item is a folder. Read-only. */
    public ?string $cTag = null;

    /** 
     * Information about the deleted state of the item. Read-only.
     * @var Deleted|\stdClass|null
     */
    public mixed $deleted = null;

    /** 
     * File metadata, if the item is a file. Read-only.
     * @var File|\stdClass|null
     */
    public mixed $file = null;

    /** 
     * File system information on client. Read-write.
     * @var FileSystemInfo|\stdClass|null
     */
    public mixed $fileSystemInfo = null;

    /** 
     * Folder metadata, if the item is a folder. Read-only.
     * @var Folder|\stdClass|null
     */
    public mixed $folder = null;

    /** 
     * Image metadata, if the item is an image. Read-only.
     * @var Image|\stdClass|null
     */
    public mixed $image = null;

    /** 
     * Location metadata, if the item has location data. Read-only.
     * @var GeoCoordinates|\stdClass|null
     */
    public mixed $location = null;

    /** 
     * Malware metadata, if the item was detected to contain malware. Read-only.
     * @var Malware|\stdClass|null
     */
    public mixed $malware = null;

    /** 
     * If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
     * @var Package|\stdClass|null
     */
    public mixed $package = null;

    /** 
     * If present, indicates that one or more operations that might affect the state of the driveItem are pending completion. Read-only.
     * @var PendingOperations|\stdClass|null
     */
    public mixed $pendingOperations = null;

    /** 
     * Photo metadata, if the item is a photo. Read-only.
     * @var Photo|\stdClass|null
     */
    public mixed $photo = null;

    /** 
     * Provides information about the published or checked-out state of an item, in locations that support such actions. This property isn't returned by default. Read-only.
     * @var PublicationFacet|\stdClass|null
     */
    public mixed $publication = null;

    /** 
     * Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.
     * @var RemoteItem|\stdClass|null
     */
    public mixed $remoteItem = null;

    /** 
     * If this property is non-null, it indicates that the driveItem is the top-most driveItem in the drive.
     * @var Root|\stdClass|null
     */
    public mixed $root = null;

    /** 
     * Search metadata, if the item is from a search result. Read-only.
     * @var SearchResult|\stdClass|null
     */
    public mixed $searchResult = null;

    /** 
     * Indicates that the item was shared with others and provides information about the shared state of the item. Read-only.
     * @var Shared|\stdClass|null
     */
    public mixed $shared = null;

    /** 
     * Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @var SharepointIds|\stdClass|null
     */
    public mixed $sharepointIds = null;

    /** Size of the item in bytes. Read-only. */
    public ?float $size = null;

    /** 
     * If the current item is also available as a special folder, this facet is returned. Read-only.
     * @var SpecialFolder|\stdClass|null
     */
    public mixed $specialFolder = null;

    /** 
     * Video metadata, if the item is a video. Read-only.
     * @var Video|\stdClass|null
     */
    public mixed $video = null;

    /** WebDAV compatible URL for the item. */
    public ?string $webDavUrl = null;

    /** 
     * Analytics about the view activities that took place on this item.
     * @var ItemAnalytics|\stdClass|null
     */
    public mixed $analytics = null;

    /** 
     * Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.
     * @var DriveItem[]
     */
    public array $children = [];

    /** 
     * For drives in SharePoint, the associated document library list item. Read-only. Nullable.
     * @var ListItem|\stdClass|null
     */
    public mixed $listItem = null;

    /** 
     * The set of permissions for the item. Read-only. Nullable.
     * @var Permission[]
     */
    public array $permissions = [];

    /** 
     * Information about retention label and settings enforced on the driveItem. Read-write.
     * @var ItemRetentionLabel|\stdClass|null
     */
    public mixed $retentionLabel = null;

    /** 
     * The set of subscriptions on the item. Only supported on the root of a drive.
     * @var Subscription[]
     */
    public array $subscriptions = [];

    /** 
     * Collection of thumbnailSet objects associated with the item. For more information, see getting thumbnails. Read-only. Nullable.
     * @var ThumbnailSet[]
     */
    public array $thumbnails = [];

    /** 
     * The list of previous versions of the item. For more info, see getting previous versions. Read-only. Nullable.
     * @var DriveItemVersion[]
     */
    public array $versions = [];

    /** 
     * For files that are Excel spreadsheets, access to the workbook API to work with the spreadsheet's contents. Nullable.
     * @var Workbook|\stdClass|null
     */
    public mixed $workbook = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['eTag'])) {
            $this->eTag = $data['eTag'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['parentReference'])) {
            $this->parentReference = is_array($data['parentReference']) ? new ItemReference($data['parentReference']) : $data['parentReference'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['createdByUser'])) {
            $this->createdByUser = is_array($data['createdByUser']) ? new User($data['createdByUser']) : $data['createdByUser'];
        }
        if (isset($data['lastModifiedByUser'])) {
            $this->lastModifiedByUser = is_array($data['lastModifiedByUser']) ? new User($data['lastModifiedByUser']) : $data['lastModifiedByUser'];
        }
        if (isset($data['audio'])) {
            $this->audio = is_array($data['audio']) ? new Audio($data['audio']) : $data['audio'];
        }
        if (isset($data['bundle'])) {
            $this->bundle = is_array($data['bundle']) ? new Bundle($data['bundle']) : $data['bundle'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['cTag'])) {
            $this->cTag = $data['cTag'];
        }
        if (isset($data['deleted'])) {
            $this->deleted = is_array($data['deleted']) ? new Deleted($data['deleted']) : $data['deleted'];
        }
        if (isset($data['file'])) {
            $this->file = is_array($data['file']) ? new File($data['file']) : $data['file'];
        }
        if (isset($data['fileSystemInfo'])) {
            $this->fileSystemInfo = is_array($data['fileSystemInfo']) ? new FileSystemInfo($data['fileSystemInfo']) : $data['fileSystemInfo'];
        }
        if (isset($data['folder'])) {
            $this->folder = is_array($data['folder']) ? new Folder($data['folder']) : $data['folder'];
        }
        if (isset($data['image'])) {
            $this->image = is_array($data['image']) ? new Image($data['image']) : $data['image'];
        }
        if (isset($data['location'])) {
            $this->location = is_array($data['location']) ? new GeoCoordinates($data['location']) : $data['location'];
        }
        if (isset($data['malware'])) {
            $this->malware = is_array($data['malware']) ? new Malware($data['malware']) : $data['malware'];
        }
        if (isset($data['package'])) {
            $this->package = is_array($data['package']) ? new Package($data['package']) : $data['package'];
        }
        if (isset($data['pendingOperations'])) {
            $this->pendingOperations = is_array($data['pendingOperations']) ? new PendingOperations($data['pendingOperations']) : $data['pendingOperations'];
        }
        if (isset($data['photo'])) {
            $this->photo = is_array($data['photo']) ? new Photo($data['photo']) : $data['photo'];
        }
        if (isset($data['publication'])) {
            $this->publication = is_array($data['publication']) ? new PublicationFacet($data['publication']) : $data['publication'];
        }
        if (isset($data['remoteItem'])) {
            $this->remoteItem = is_array($data['remoteItem']) ? new RemoteItem($data['remoteItem']) : $data['remoteItem'];
        }
        if (isset($data['root'])) {
            $this->root = is_array($data['root']) ? new Root($data['root']) : $data['root'];
        }
        if (isset($data['searchResult'])) {
            $this->searchResult = is_array($data['searchResult']) ? new SearchResult($data['searchResult']) : $data['searchResult'];
        }
        if (isset($data['shared'])) {
            $this->shared = is_array($data['shared']) ? new Shared($data['shared']) : $data['shared'];
        }
        if (isset($data['sharepointIds'])) {
            $this->sharepointIds = is_array($data['sharepointIds']) ? new SharepointIds($data['sharepointIds']) : $data['sharepointIds'];
        }
        if (isset($data['size'])) {
            $this->size = $data['size'];
        }
        if (isset($data['specialFolder'])) {
            $this->specialFolder = is_array($data['specialFolder']) ? new SpecialFolder($data['specialFolder']) : $data['specialFolder'];
        }
        if (isset($data['video'])) {
            $this->video = is_array($data['video']) ? new Video($data['video']) : $data['video'];
        }
        if (isset($data['webDavUrl'])) {
            $this->webDavUrl = $data['webDavUrl'];
        }
        if (isset($data['analytics'])) {
            $this->analytics = is_array($data['analytics']) ? new ItemAnalytics($data['analytics']) : $data['analytics'];
        }
        if (isset($data['children'])) {
            $this->children = $data['children'];
        }
        if (isset($data['listItem'])) {
            $this->listItem = is_array($data['listItem']) ? new ListItem($data['listItem']) : $data['listItem'];
        }
        if (isset($data['permissions'])) {
            $this->permissions = $data['permissions'];
        }
        if (isset($data['retentionLabel'])) {
            $this->retentionLabel = is_array($data['retentionLabel']) ? new ItemRetentionLabel($data['retentionLabel']) : $data['retentionLabel'];
        }
        if (isset($data['subscriptions'])) {
            $this->subscriptions = $data['subscriptions'];
        }
        if (isset($data['thumbnails'])) {
            $this->thumbnails = $data['thumbnails'];
        }
        if (isset($data['versions'])) {
            $this->versions = $data['versions'];
        }
        if (isset($data['workbook'])) {
            $this->workbook = is_array($data['workbook']) ? new Workbook($data['workbook']) : $data['workbook'];
        }
    }
}
