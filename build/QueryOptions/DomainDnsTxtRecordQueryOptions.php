<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsTxtRecord resources
 *
 * Available select fields:
 * - text
 */
class DomainDnsTxtRecordQueryOptions extends QueryOptions
{
    public const FIELD_TEXT = 'text';

    /**
     * Select specific DomainDnsTxtRecord properties
     * 
     * @param array<string> $select Use DomainDnsTxtRecordQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
