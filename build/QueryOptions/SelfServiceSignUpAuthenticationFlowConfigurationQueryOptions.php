<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SelfServiceSignUpAuthenticationFlowConfiguration resources
 *
 * Available select fields:
 * - isEnabled
 */
class SelfServiceSignUpAuthenticationFlowConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SelfServiceSignUpAuthenticationFlowConfiguration
     */
    public const FIELD_IS_ENABLED = 'isEnabled';

    /**
     * Select specific SelfServiceSignUpAuthenticationFlowConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
