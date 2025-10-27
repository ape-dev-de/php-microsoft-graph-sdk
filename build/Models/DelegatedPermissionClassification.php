<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedPermissionClassification
 */
class DelegatedPermissionClassification
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The classification value. Possible values: low, medium (preview), high (preview). Doesn't support $filter.
     * @var PermissionClassificationType|\stdClass|null
     */
    public PermissionClassificationType|\stdClass|null $classification = null;

    /** The unique identifier (id) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Required on create. Doesn't support $filter. */
    public ?string $permissionId = null;

    /** The claim value (value) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Doesn't support $filter. */
    public ?string $permissionName = null;


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
        if (isset($data['classification'])) {
            $this->classification = is_array($data['classification']) ? new PermissionClassificationType($data['classification']) : $data['classification'];
        }
        if (isset($data['permissionId'])) {
            $this->permissionId = $data['permissionId'];
        }
        if (isset($data['permissionName'])) {
            $this->permissionName = $data['permissionName'];
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
