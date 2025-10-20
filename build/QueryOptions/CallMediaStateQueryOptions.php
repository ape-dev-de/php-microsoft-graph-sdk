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
    public const FIELD_AUDIO = 'audio';

    /**
     * Select specific CallMediaState properties
     * 
     * @param array<string> $select Use CallMediaStateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
