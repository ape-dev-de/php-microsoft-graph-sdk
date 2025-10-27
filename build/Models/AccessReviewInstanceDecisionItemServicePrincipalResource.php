<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemServicePrincipalResource
 */
class AccessReviewInstanceDecisionItemServicePrincipalResource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Identifier of the resource */
    public ?string $id = null;

    /** Display name of the resource */
    public ?string $displayName = null;

    /** Type of resource. Types include: Group, ServicePrincipal, DirectoryRole, AzureRole, AccessPackageAssignmentPolicy. */
    public ?string $type = null;

    /** The globally unique identifier of the application to which access has been granted. */
    public ?string $appId = null;


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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
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
