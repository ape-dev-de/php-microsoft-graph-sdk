<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppListItem
 */
class AppListItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The application or bundle identifier of the application */
    public ?string $appId = null;

    /** The Store URL of the application */
    public ?string $appStoreUrl = null;

    /** The application name */
    public ?string $name = null;

    /** The publisher of the application */
    public ?string $publisher = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
        }
        if (isset($data['appStoreUrl'])) {
            $this->appStoreUrl = $data['appStoreUrl'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['publisher'])) {
            $this->publisher = $data['publisher'];
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
