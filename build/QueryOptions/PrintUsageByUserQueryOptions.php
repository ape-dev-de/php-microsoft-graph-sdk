<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintUsageByUser resources
 *
 * Available select fields:
 * - userPrincipalName
 */
class PrintUsageByUserQueryOptions extends QueryOptions
{
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific PrintUsageByUser properties
     * 
     * @param array<string> $select Use PrintUsageByUserQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
