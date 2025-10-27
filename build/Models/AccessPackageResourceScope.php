<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceScope
 */
class AccessPackageResourceScope
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The description of the scope. */
    public ?string $description = null;

    /** The display name of the scope. */
    public ?string $displayName = null;

    /** True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource. */
    public ?bool $isRootScope = null;

    /** The unique identifier for the scope in the resource as defined in the origin system. */
    public ?string $originId = null;

    /** The origin system for the scope. */
    public ?string $originSystem = null;

    /** 
     * 
     * @var AccessPackageResource|\stdClass|null
     */
    public AccessPackageResource|\stdClass|null $resource = null;


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
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isRootScope'])) {
            $this->isRootScope = $data['isRootScope'];
        }
        if (isset($data['originId'])) {
            $this->originId = $data['originId'];
        }
        if (isset($data['originSystem'])) {
            $this->originSystem = $data['originSystem'];
        }
        if (isset($data['resource'])) {
            $this->resource = is_array($data['resource']) ? new AccessPackageResource($data['resource']) : $data['resource'];
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
