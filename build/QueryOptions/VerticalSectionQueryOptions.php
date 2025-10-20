<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VerticalSection resources
 *
 * Available select fields:
 * - emphasis
 * - webparts
 */
class VerticalSectionQueryOptions extends QueryOptions
{
    public const FIELD_EMPHASIS = 'emphasis';
    public const FIELD_WEBPARTS = 'webparts';

    /**
     * Select specific VerticalSection properties
     * 
     * @param array<string> $select Use VerticalSectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
