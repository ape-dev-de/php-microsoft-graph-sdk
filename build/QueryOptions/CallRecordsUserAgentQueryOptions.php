<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsUserAgent resources
 *
 * Available select fields:
 * - applicationVersion
 * - headerValue
 */
class CallRecordsUserAgentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsUserAgent
     */
    public const FIELD_APPLICATION_VERSION = 'applicationVersion';
    public const FIELD_HEADER_VALUE = 'headerValue';

    /**
     * Select specific CallRecordsUserAgent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
