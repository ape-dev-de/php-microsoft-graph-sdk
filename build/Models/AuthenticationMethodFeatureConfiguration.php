<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodFeatureConfiguration
 */
class AuthenticationMethodFeatureConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * A single entity that is excluded from this feature.
     * @var FeatureTarget|\stdClass|null
     */
    public FeatureTarget|\stdClass|null $excludeTarget = null;

    /** 
     * A single entity that is included in this feature.
     * @var FeatureTarget|\stdClass|null
     */
    public FeatureTarget|\stdClass|null $includeTarget = null;

    /** 
     * Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Microsoft Entra ID for the setting. The default value is disabled.
     * @var AdvancedConfigState|\stdClass|null
     */
    public AdvancedConfigState|\stdClass|null $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['excludeTarget'])) {
            $this->excludeTarget = is_array($data['excludeTarget']) ? new FeatureTarget($data['excludeTarget']) : $data['excludeTarget'];
        }
        if (isset($data['includeTarget'])) {
            $this->includeTarget = is_array($data['includeTarget']) ? new FeatureTarget($data['includeTarget']) : $data['includeTarget'];
        }
        if (isset($data['state'])) {
            $this->state = is_string($data['state']) ? AdvancedConfigState::tryFrom($data['state']) : $data['state'];
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
