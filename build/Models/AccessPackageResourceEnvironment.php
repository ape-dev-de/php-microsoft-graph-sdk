<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceEnvironment
 */
class AccessPackageResourceEnvironment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Connection information of an environment used to connect to a resource.
     * @var ConnectionInfo|\stdClass|null
     */
    public ConnectionInfo|\stdClass|null $connectionInfo = null;

    /** The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The description of this object. */
    public ?string $description = null;

    /** The display name of this object. */
    public ?string $displayName = null;

    /** Determines whether this is default environment or not. It is set to true for all static origin systems, such as Microsoft Entra groups and Microsoft Entra Applications. */
    public ?bool $isDefaultEnvironment = null;

    /** The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** The unique identifier of this environment in the origin system. */
    public ?string $originId = null;

    /** The type of the resource in the origin system, that is, SharePointOnline. Requires $filter (eq). */
    public ?string $originSystem = null;

    /** 
     * Read-only. Required.
     * @var AccessPackageResource[]
     */
    public array $resources = [];


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
        if (isset($data['connectionInfo'])) {
            $this->connectionInfo = is_array($data['connectionInfo']) ? new ConnectionInfo($data['connectionInfo']) : $data['connectionInfo'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isDefaultEnvironment'])) {
            $this->isDefaultEnvironment = $data['isDefaultEnvironment'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = is_string($data['modifiedDateTime']) ? new \DateTimeImmutable($data['modifiedDateTime']) : $data['modifiedDateTime'];
        }
        if (isset($data['originId'])) {
            $this->originId = $data['originId'];
        }
        if (isset($data['originSystem'])) {
            $this->originSystem = $data['originSystem'];
        }
        if (isset($data['resources'])) {
            $this->resources = $data['resources'];
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
