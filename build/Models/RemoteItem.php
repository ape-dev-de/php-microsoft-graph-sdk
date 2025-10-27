<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteItem
 */
class RemoteItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique identifier for the remote item in its drive. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the user, device, and application which created the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** Date and time of item creation. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Indicates that the remote item is a file. Read-only.
     * @var File|\stdClass|null
     */
    public File|\stdClass|null $file = null;

    /** 
     * Information about the remote item from the local file system. Read-only.
     * @var FileSystemInfo|\stdClass|null
     */
    public FileSystemInfo|\stdClass|null $fileSystemInfo = null;

    /** 
     * Indicates that the remote item is a folder. Read-only.
     * @var Folder|\stdClass|null
     */
    public Folder|\stdClass|null $folder = null;

    /** 
     * Image metadata, if the item is an image. Read-only.
     * @var Image|\stdClass|null
     */
    public Image|\stdClass|null $image = null;

    /** 
     * Identity of the user, device, and application which last modified the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** Date and time the item was last modified. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Optional. Filename of the remote item. Read-only. */
    public ?string $name = null;

    /** 
     * If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
     * @var Package|\stdClass|null
     */
    public Package|\stdClass|null $package = null;

    /** 
     * Properties of the parent of the remote item. Read-only.
     * @var ItemReference|\stdClass|null
     */
    public ItemReference|\stdClass|null $parentReference = null;

    /** 
     * Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
     * @var Shared|\stdClass|null
     */
    public Shared|\stdClass|null $shared = null;

    /** 
     * Provides interop between items in OneDrive for Business and SharePoint with the full set of item identifiers. Read-only.
     * @var SharepointIds|\stdClass|null
     */
    public SharepointIds|\stdClass|null $sharepointIds = null;

    /** Size of the remote item. Read-only. */
    public ?float $size = null;

    /** 
     * If the current item is also available as a special folder, this facet is returned. Read-only.
     * @var SpecialFolder|\stdClass|null
     */
    public SpecialFolder|\stdClass|null $specialFolder = null;

    /** 
     * Video metadata, if the item is a video. Read-only.
     * @var Video|\stdClass|null
     */
    public Video|\stdClass|null $video = null;

    /** DAV compatible URL for the item. */
    public ?string $webDavUrl = null;

    /** URL that displays the resource in the browser. Read-only. */
    public ?string $webUrl = null;


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
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
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
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['package'])) {
            $this->package = is_array($data['package']) ? new Package($data['package']) : $data['package'];
        }
        if (isset($data['parentReference'])) {
            $this->parentReference = is_array($data['parentReference']) ? new ItemReference($data['parentReference']) : $data['parentReference'];
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
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
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
