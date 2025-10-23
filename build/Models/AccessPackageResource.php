<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResource
 */
class AccessPackageResource
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Contains information about the attributes to be collected from the requestor and sent to the resource application.
     * @var AccessPackageResourceAttribute[]
     */
    public array $attributes = [];

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** A description for the resource. */
    public ?string $description = null;

    /** The display name of the resource, such as the application name, group name or site name. */
    public ?string $displayName = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** The unique identifier of the resource in the origin system. For a Microsoft Entra group, this is the identifier of the group. */
    public ?string $originId = null;

    /** The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup. */
    public ?string $originSystem = null;

    /** 
     * Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
     * @var AccessPackageResourceEnvironment|\stdClass|null
     */
    public mixed $environment = null;

    /** 
     * Read-only. Nullable. Supports $expand.
     * @var AccessPackageResourceRole[]
     */
    public array $roles = [];

    /** 
     * Read-only. Nullable. Supports $expand.
     * @var AccessPackageResourceScope[]
     */
    public array $scopes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['attributes'])) {
            $this->attributes = $data['attributes'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = $data['modifiedDateTime'];
        }
        if (isset($data['originId'])) {
            $this->originId = $data['originId'];
        }
        if (isset($data['originSystem'])) {
            $this->originSystem = $data['originSystem'];
        }
        if (isset($data['environment'])) {
            $this->environment = $data['environment'];
        }
        if (isset($data['roles'])) {
            $this->roles = $data['roles'];
        }
        if (isset($data['scopes'])) {
            $this->scopes = $data['scopes'];
        }
    }
}
