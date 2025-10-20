<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HorizontalSectionColumn resources
 *
 * Available select fields:
 * - width
 * - webparts
 */
class HorizontalSectionColumnQueryOptions extends QueryOptions
{
    public const FIELD_WIDTH = 'width';
    public const FIELD_WEBPARTS = 'webparts';

    /**
     * Select specific HorizontalSectionColumn properties
     * 
     * @param array<string> $select Use HorizontalSectionColumnQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
