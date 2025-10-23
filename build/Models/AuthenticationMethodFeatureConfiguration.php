<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodFeatureConfiguration
 */
class AuthenticationMethodFeatureConfiguration
{
    /** 
     * A single entity that is excluded from this feature.
     * @var FeatureTarget|\stdClass|null
     */
    public mixed $excludeTarget = null;

    /** 
     * A single entity that is included in this feature.
     * @var FeatureTarget|\stdClass|null
     */
    public mixed $includeTarget = null;

    /** 
     * Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn't been explicitly set and uses the default behavior of Microsoft Entra ID for the setting. The default value is disabled.
     * @var AdvancedConfigState|\stdClass|null
     */
    public mixed $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['excludeTarget'])) {
            $this->excludeTarget = $data['excludeTarget'];
        }
        if (isset($data['includeTarget'])) {
            $this->includeTarget = $data['includeTarget'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
    }
}
