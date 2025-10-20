<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityPassiveDnsRecord resources
 *
 * Available select fields:
 * - collectedDateTime
 * - firstSeenDateTime
 * - lastSeenDateTime
 * - recordType
 * - artifact
 * - parentHost
 */
class SecurityPassiveDnsRecordQueryOptions extends QueryOptions
{
    public const FIELD_COLLECTED_DATE_TIME = 'collectedDateTime';
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_RECORD_TYPE = 'recordType';
    public const FIELD_ARTIFACT = 'artifact';
    public const FIELD_PARENT_HOST = 'parentHost';

    /**
     * Select specific SecurityPassiveDnsRecord properties
     * 
     * @param array<string> $select Use SecurityPassiveDnsRecordQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
