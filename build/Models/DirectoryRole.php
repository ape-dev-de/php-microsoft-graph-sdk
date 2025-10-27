<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryRole
 */
class DirectoryRole
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** The description for the directory role. Read-only. Supports $filter (eq), $search, $select. */
    public ?string $description = null;

    /** The display name for the directory role. Read-only. Supports $filter (eq), $search, $select. */
    public ?string $displayName = null;

    /** The id of the directoryRoleTemplate that this role is based on. The property must be specified when activating a directory role in a tenant with a POST operation. After the directory role has been activated, the property is read only. Supports $filter (eq), $select. */
    public ?string $roleTemplateId = null;

    /** 
     * Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable. Supports $expand.
     * @var DirectoryObject[]
     */
    public array $members = [];

    /** 
     * Members of this directory role that are scoped to administrative units. Read-only. Nullable.
     * @var ScopedRoleMembership[]
     */
    public array $scopedMembers = [];


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
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['roleTemplateId'])) {
            $this->roleTemplateId = $data['roleTemplateId'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
        }
        if (isset($data['scopedMembers'])) {
            $this->scopedMembers = $data['scopedMembers'];
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
