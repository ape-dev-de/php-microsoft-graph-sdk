<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainDnsSrvRecord resources
 *
 * Available select fields:
 * - nameTarget
 * - port
 * - priority
 * - protocol
 * - service
 * - weight
 */
class DomainDnsSrvRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DomainDnsSrvRecord
     */
    public const FIELD_NAME_TARGET = 'nameTarget';
    public const FIELD_PORT = 'port';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_SERVICE = 'service';
    public const FIELD_WEIGHT = 'weight';

    /**
     * Select specific DomainDnsSrvRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
