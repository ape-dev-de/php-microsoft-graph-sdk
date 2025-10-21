<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenotePagePreview resources
 *
 * Available select fields:
 * - links
 * - previewText
 */
class OnenotePagePreviewQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenotePagePreview
     */
    public const FIELD_LINKS = 'links';
    public const FIELD_PREVIEW_TEXT = 'previewText';

    /**
     * Select specific OnenotePagePreview properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
