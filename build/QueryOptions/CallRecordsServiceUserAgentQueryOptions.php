<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsServiceUserAgent resources
 *
 * Available select fields:
 * - role
 */
class CallRecordsServiceUserAgentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsServiceUserAgent
     */
    public const FIELD_ROLE = 'role';

    /**
     * Select specific CallRecordsServiceUserAgent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
