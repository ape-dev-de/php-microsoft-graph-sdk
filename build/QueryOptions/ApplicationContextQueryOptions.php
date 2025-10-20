<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApplicationContext resources
 *
 * Available select fields:
 * - includeApplications
 */
class ApplicationContextQueryOptions extends QueryOptions
{
    public const FIELD_INCLUDE_APPLICATIONS = 'includeApplications';

    /**
     * Select specific ApplicationContext properties
     * 
     * @param array<string> $select Use ApplicationContextQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
