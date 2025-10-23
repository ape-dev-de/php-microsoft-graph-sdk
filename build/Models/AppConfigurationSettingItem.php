<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConfigurationSettingItem
 */
class AppConfigurationSettingItem
{
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
        if (isset($data['appConfigKey'])) {
            $this->appConfigKey = $data['appConfigKey'];
        }
        if (isset($data['appConfigKeyType'])) {
            $this->appConfigKeyType = $data['appConfigKeyType'];
        }
        if (isset($data['appConfigKeyValue'])) {
            $this->appConfigKeyValue = $data['appConfigKeyValue'];
        }
    }
}
