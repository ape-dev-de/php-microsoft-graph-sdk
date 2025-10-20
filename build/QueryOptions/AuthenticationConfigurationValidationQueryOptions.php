<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationConfigurationValidation resources
 *
 * Available select fields:
 * - errors
 * - warnings
 */
class AuthenticationConfigurationValidationQueryOptions extends QueryOptions
{
    public const FIELD_ERRORS = 'errors';
    public const FIELD_WARNINGS = 'warnings';

    /**
     * Select specific AuthenticationConfigurationValidation properties
     * 
     * @param array<string> $select Use AuthenticationConfigurationValidationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
