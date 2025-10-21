<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VisualInfo resources
 *
 * Available select fields:
 * - attribution
 * - backgroundColor
 * - content
 * - description
 * - displayText
 */
class VisualInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VisualInfo
     */
    public const FIELD_ATTRIBUTION = 'attribution';
    public const FIELD_BACKGROUND_COLOR = 'backgroundColor';
    public const FIELD_CONTENT = 'content';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_TEXT = 'displayText';

    /**
     * Select specific VisualInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
