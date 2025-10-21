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
    /**
     * Available select fields for PrintUsageByUser
     */
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific PrintUsageByUser properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
