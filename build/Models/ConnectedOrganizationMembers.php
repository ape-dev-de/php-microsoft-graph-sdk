<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectedOrganizationMembers
 */
class ConnectedOrganizationMembers
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The ID of the connected organization in entitlement management. */
    public ?string $connectedOrganizationId = null;

    /** The name of the connected organization. */
    public ?string $description = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['connectedOrganizationId'])) {
            $this->connectedOrganizationId = $data['connectedOrganizationId'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
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
