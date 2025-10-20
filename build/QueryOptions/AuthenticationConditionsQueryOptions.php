<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationConditions resources
 *
 * Available select fields:
 * - applications
 */
class AuthenticationConditionsQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATIONS = 'applications';

    /**
     * Select specific AuthenticationConditions properties
     * 
     * @param array<string> $select Use AuthenticationConditionsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
