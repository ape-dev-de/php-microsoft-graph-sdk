<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsCallType resources
 *
 * Available select fields:
 */
class CallRecordsCallTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsCallType
     */

    /**
     * Select specific CallRecordsCallType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
