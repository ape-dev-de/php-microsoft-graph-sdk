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
    public const FIELD_IS_ENABLED = 'isEnabled';

    /**
     * Select specific SelfServiceSignUpAuthenticationFlowConfiguration properties
     * 
     * @param array<string> $select Use SelfServiceSignUpAuthenticationFlowConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
