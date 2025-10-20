<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WebPartPosition resources
 *
 * Available select fields:
 * - columnId
 * - horizontalSectionId
 * - isInVerticalSection
 * - webPartIndex
 */
class WebPartPositionQueryOptions extends QueryOptions
{
    public const FIELD_COLUMN_ID = 'columnId';
    public const FIELD_HORIZONTAL_SECTION_ID = 'horizontalSectionId';
    public const FIELD_IS_IN_VERTICAL_SECTION = 'isInVerticalSection';
    public const FIELD_WEB_PART_INDEX = 'webPartIndex';

    /**
     * Select specific WebPartPosition properties
     * 
     * @param array<string> $select Use WebPartPositionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
