<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContactFolder
 */
class ContactFolder
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The folder's display name. */
    public ?string $displayName = null;

    /** The ID of the folder's parent folder. */
    public ?string $parentFolderId = null;

    /** 
     * The collection of child folders in the folder. Navigation property. Read-only. Nullable.
     * @var ContactFolder[]
     */
    public array $childFolders = [];

    /** 
     * The contacts in the folder. Navigation property. Read-only. Nullable.
     * @var Contact[]
     */
    public array $contacts = [];

    /** 
     * The collection of multi-value extended properties defined for the contactFolder. Read-only. Nullable.
     * @var MultiValueLegacyExtendedProperty[]
     */
    public array $multiValueExtendedProperties = [];

    /** 
     * The collection of single-value extended properties defined for the contactFolder. Read-only. Nullable.
     * @var SingleValueLegacyExtendedProperty[]
     */
    public array $singleValueExtendedProperties = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['parentFolderId'])) {
            $this->parentFolderId = $data['parentFolderId'];
        }
        if (isset($data['childFolders'])) {
            $this->childFolders = $data['childFolders'];
        }
        if (isset($data['contacts'])) {
            $this->contacts = $data['contacts'];
        }
        if (isset($data['multiValueExtendedProperties'])) {
            $this->multiValueExtendedProperties = $data['multiValueExtendedProperties'];
        }
        if (isset($data['singleValueExtendedProperties'])) {
            $this->singleValueExtendedProperties = $data['singleValueExtendedProperties'];
        }
    }
}
