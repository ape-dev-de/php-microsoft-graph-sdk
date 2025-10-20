<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsMxRecord resources
 *
 * Available select fields:
 * - mailExchange
 * - preference
 */
class DomainDnsMxRecordQueryOptions extends QueryOptions
{
    public const FIELD_MAIL_EXCHANGE = 'mailExchange';
    public const FIELD_PREFERENCE = 'preference';

    /**
     * Select specific DomainDnsMxRecord properties
     * 
     * @param array<string> $select Use DomainDnsMxRecordQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
