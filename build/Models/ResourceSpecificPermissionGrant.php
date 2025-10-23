<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceSpecificPermissionGrant
 */
class ResourceSpecificPermissionGrant
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** ID of the service principal of the Microsoft Entra app that has been granted access. Read-only. */
    public ?string $clientAppId = null;

    /** ID of the Microsoft Entra app that has been granted access. Read-only. */
    public ?string $clientId = null;

    /** The name of the resource-specific permission. Read-only. */
    public ?string $permission = null;

    /** The type of permission. Possible values are: Application, Delegated. Read-only. */
    public ?string $permissionType = null;

    /** ID of the Microsoft Entra app that is hosting the resource. Read-only. */
    public ?string $resourceAppId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['clientAppId'])) {
            $this->clientAppId = $data['clientAppId'];
        }
        if (isset($data['clientId'])) {
            $this->clientId = $data['clientId'];
        }
        if (isset($data['permission'])) {
            $this->permission = $data['permission'];
        }
        if (isset($data['permissionType'])) {
            $this->permissionType = $data['permissionType'];
        }
        if (isset($data['resourceAppId'])) {
            $this->resourceAppId = $data['resourceAppId'];
        }
    }
}
