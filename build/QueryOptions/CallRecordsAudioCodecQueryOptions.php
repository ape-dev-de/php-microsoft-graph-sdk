<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsAudioCodec resources
 *
 * Available select fields:
 */
class CallRecordsAudioCodecQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsAudioCodec
     */

    /**
     * Select specific CallRecordsAudioCodec properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
