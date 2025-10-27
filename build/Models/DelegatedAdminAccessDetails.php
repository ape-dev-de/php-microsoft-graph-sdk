<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessDetails
 */
class DelegatedAdminAccessDetails
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The directory roles that the Microsoft partner is assigned in the customer tenant.
     * @var UnifiedRole[]
     */
    public array $unifiedRoles = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['unifiedRoles'])) {
            $this->unifiedRoles = $data['unifiedRoles'];
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
