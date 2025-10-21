<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallMediaState resources
 *
 * Available select fields:
 * - audio
 */
class CallMediaStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallMediaState
     */
    public const FIELD_AUDIO = 'audio';

    /**
     * Select specific CallMediaState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
