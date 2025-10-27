<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingSource
 */
class SettingSource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Not yet documented */
    public ?string $id = null;

    /** Not yet documented */
    public ?string $displayName = null;

    /**  */
    public ?SettingSourceType $sourceType = null;


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
        if (isset($data['sourceType'])) {
            $this->sourceType = is_array($data['sourceType']) ? new SettingSourceType($data['sourceType']) : $data['sourceType'];
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
