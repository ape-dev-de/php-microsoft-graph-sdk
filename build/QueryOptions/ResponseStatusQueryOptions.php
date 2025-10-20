<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResponseStatus resources
 *
 * Available select fields:
 * - response
 * - time
 */
class ResponseStatusQueryOptions extends QueryOptions
{
    public const FIELD_RESPONSE = 'response';
    public const FIELD_TIME = 'time';

    /**
     * Select specific ResponseStatus properties
     * 
     * @param array<string> $select Use ResponseStatusQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
