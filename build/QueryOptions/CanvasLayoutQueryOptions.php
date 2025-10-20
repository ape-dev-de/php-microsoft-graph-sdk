<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CanvasLayout resources
 *
 * Available select fields:
 * - horizontalSections
 * - verticalSection
 */
class CanvasLayoutQueryOptions extends QueryOptions
{
    public const FIELD_HORIZONTAL_SECTIONS = 'horizontalSections';
    public const FIELD_VERTICAL_SECTION = 'verticalSection';

    /**
     * Select specific CanvasLayout properties
     * 
     * @param array<string> $select Use CanvasLayoutQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
