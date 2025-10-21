<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessSessionControls resources
 *
 * Available select fields:
 * - applicationEnforcedRestrictions
 * - cloudAppSecurity
 * - disableResilienceDefaults
 * - persistentBrowser
 * - secureSignInSession
 * - signInFrequency
 */
class ConditionalAccessSessionControlsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessSessionControls
     */
    public const FIELD_APPLICATION_ENFORCED_RESTRICTIONS = 'applicationEnforcedRestrictions';
    public const FIELD_CLOUD_APP_SECURITY = 'cloudAppSecurity';
    public const FIELD_DISABLE_RESILIENCE_DEFAULTS = 'disableResilienceDefaults';
    public const FIELD_PERSISTENT_BROWSER = 'persistentBrowser';
    public const FIELD_SECURE_SIGN_IN_SESSION = 'secureSignInSession';
    public const FIELD_SIGN_IN_FREQUENCY = 'signInFrequency';

    /**
     * Select specific ConditionalAccessSessionControls properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
