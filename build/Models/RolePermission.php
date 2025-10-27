<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RolePermission
 */
class RolePermission
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Resource Actions each containing a set of allowed and not allowed permissions.
     * @var ResourceAction[]
     */
    public array $resourceActions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['resourceActions'])) {
            $this->resourceActions = $data['resourceActions'];
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
