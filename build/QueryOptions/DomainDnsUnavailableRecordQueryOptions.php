<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsUnavailableRecord resources
 *
 * Available select fields:
 * - description
 */
class DomainDnsUnavailableRecordQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';

    /**
     * Select specific DomainDnsUnavailableRecord properties
     * 
     * @param array<string> $select Use DomainDnsUnavailableRecordQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
