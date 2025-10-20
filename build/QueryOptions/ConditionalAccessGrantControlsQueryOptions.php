<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessGrantControls resources
 *
 * Available select fields:
 * - builtInControls
 * - customAuthenticationFactors
 * - operator
 * - termsOfUse
 * - authenticationStrength
 */
class ConditionalAccessGrantControlsQueryOptions extends QueryOptions
{
    public const FIELD_BUILT_IN_CONTROLS = 'builtInControls';
    public const FIELD_CUSTOM_AUTHENTICATION_FACTORS = 'customAuthenticationFactors';
    public const FIELD_OPERATOR = 'operator';
    public const FIELD_TERMS_OF_USE = 'termsOfUse';
    public const FIELD_AUTHENTICATION_STRENGTH = 'authenticationStrength';

    /**
     * Select specific ConditionalAccessGrantControls properties
     * 
     * @param array<string> $select Use ConditionalAccessGrantControlsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
