<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PageLinks resources
 *
 * Available select fields:
 * - oneNoteClientUrl
 * - oneNoteWebUrl
 */
class PageLinksQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PageLinks
     */
    public const FIELD_ONE_NOTE_CLIENT_URL = 'oneNoteClientUrl';
    public const FIELD_ONE_NOTE_WEB_URL = 'oneNoteWebUrl';

    /**
     * Select specific PageLinks properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
