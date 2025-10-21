<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsVideoCodec resources
 *
 * Available select fields:
 */
class CallRecordsVideoCodecQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsVideoCodec
     */

    /**
     * Select specific CallRecordsVideoCodec properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
