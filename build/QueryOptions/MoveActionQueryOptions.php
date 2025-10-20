<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MoveAction resources
 *
 * Available select fields:
 * - from
 * - to
 */
class MoveActionQueryOptions extends QueryOptions
{
    public const FIELD_FROM = 'from';
    public const FIELD_TO = 'to';

    /**
     * Select specific MoveAction properties
     * 
     * @param array<string> $select Use MoveActionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
