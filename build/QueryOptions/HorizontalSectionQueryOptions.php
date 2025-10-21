<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HorizontalSection resources
 *
 * Available select fields:
 * - emphasis
 * - layout
 * - columns
 */
class HorizontalSectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for HorizontalSection
     */
    public const FIELD_EMPHASIS = 'emphasis';
    public const FIELD_LAYOUT = 'layout';
    public const FIELD_COLUMNS = 'columns';

    /**
     * Select specific HorizontalSection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
