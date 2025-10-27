<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UsageRightsIncluded
 */
class UsageRightsIncluded
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The email of owner label rights. */
    public ?string $ownerEmail = null;

    /** The email of user with label user rights. */
    public ?string $userEmail = null;

    /**  */
    public ?UsageRights $value = null;


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
        if (isset($data['ownerEmail'])) {
            $this->ownerEmail = $data['ownerEmail'];
        }
        if (isset($data['userEmail'])) {
            $this->userEmail = $data['userEmail'];
        }
        if (isset($data['value'])) {
            $this->value = is_string($data['value']) ? UsageRights::tryFrom($data['value']) : $data['value'];
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
