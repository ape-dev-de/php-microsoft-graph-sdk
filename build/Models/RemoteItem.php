<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteItem
 */
class RemoteItem
{
    /** Unique identifier for the remote item in its drive. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the user, device, and application which created the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Date and time of item creation. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Indicates that the remote item is a file. Read-only.
     * @var File|\stdClass|null
     */
    public mixed $file = null;

    /** 
     * Information about the remote item from the local file system. Read-only.
     * @var FileSystemInfo|\stdClass|null
     */
    public mixed $fileSystemInfo = null;

    /** 
     * Indicates that the remote item is a folder. Read-only.
     * @var Folder|\stdClass|null
     */
    public mixed $folder = null;

    /** 
     * Image metadata, if the item is an image. Read-only.
     * @var Image|\stdClass|null
     */
    public mixed $image = null;

    /** 
     * Identity of the user, device, and application which last modified the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Date and time the item was last modified. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Optional. Filename of the remote item. Read-only. */
    public ?string $name = null;

    /** 
     * If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
     * @var Package|\stdClass|null
     */
    public mixed $package = null;

    /** 
     * Properties of the parent of the remote item. Read-only.
     * @var ItemReference|\stdClass|null
     */
    public mixed $parentReference = null;

    /** 
     * Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
     * @var Shared|\stdClass|null
     */
    public mixed $shared = null;

    /** 
     * Provides interop between items in OneDrive for Business and SharePoint with the full set of item identifiers. Read-only.
     * @var SharepointIds|\stdClass|null
     */
    public mixed $sharepointIds = null;

    /** Size of the remote item. Read-only. */
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['file'])) {
            $this->file = $data['file'];
        }
        if (isset($data['fileSystemInfo'])) {
            $this->fileSystemInfo = $data['fileSystemInfo'];
        }
        if (isset($data['folder'])) {
            $this->folder = $data['folder'];
        }
        if (isset($data['image'])) {
            $this->image = $data['image'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['package'])) {
            $this->package = $data['package'];
        }
        if (isset($data['parentReference'])) {
            $this->parentReference = $data['parentReference'];
        }
        if (isset($data['shared'])) {
            $this->shared = $data['shared'];
        }
        if (isset($data['sharepointIds'])) {
            $this->sharepointIds = $data['sharepointIds'];
        }
        if (isset($data['size'])) {
            $this->size = $data['size'];
        }
        if (isset($data['specialFolder'])) {
            $this->specialFolder = $data['specialFolder'];
        }
        if (isset($data['video'])) {
            $this->video = $data['video'];
        }
        if (isset($data['webDavUrl'])) {
            $this->webDavUrl = $data['webDavUrl'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
    }
}
