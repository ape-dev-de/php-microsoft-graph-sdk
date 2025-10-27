<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotAdminLimitedMode
 */
class CopilotAdminLimitedMode
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?string $groupId = null;

    /**  */
    public ?bool $isEnabledForGroup = null;


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
        if (isset($data['groupId'])) {
            $this->groupId = $data['groupId'];
        }
        if (isset($data['isEnabledForGroup'])) {
            $this->isEnabledForGroup = is_bool($data['isEnabledForGroup']) ? $data['isEnabledForGroup'] : (bool)$data['isEnabledForGroup'];
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
