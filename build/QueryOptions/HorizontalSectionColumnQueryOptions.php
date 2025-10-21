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
    /**
     * Available select fields for HorizontalSectionColumn
     */
    public const FIELD_WIDTH = 'width';
    public const FIELD_WEBPARTS = 'webparts';

    /**
     * Select specific HorizontalSectionColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
