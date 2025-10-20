<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveItemVersion resources
 *
 * Available select fields:
 * - content
 * - size
 */
class DriveItemVersionQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific DriveItemVersion properties
     * 
     * @param array<string> $select Use DriveItemVersionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
