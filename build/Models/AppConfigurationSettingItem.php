<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConfigurationSettingItem
 */
class AppConfigurationSettingItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** app configuration key. */
    public ?string $appConfigKey = null;

    /**  */
    public ?MdmAppConfigKeyType $appConfigKeyType = null;

    /** app configuration key value. */
    public ?string $appConfigKeyValue = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['appConfigKey'])) {
            $this->appConfigKey = $data['appConfigKey'];
        }
        if (isset($data['appConfigKeyType'])) {
            $this->appConfigKeyType = is_string($data['appConfigKeyType']) ? MdmAppConfigKeyType::tryFrom($data['appConfigKeyType']) : $data['appConfigKeyType'];
        }
        if (isset($data['appConfigKeyValue'])) {
            $this->appConfigKeyValue = $data['appConfigKeyValue'];
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
