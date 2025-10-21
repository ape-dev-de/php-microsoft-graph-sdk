<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NotebookLinks resources
 *
 * Available select fields:
 * - oneNoteClientUrl
 * - oneNoteWebUrl
 */
class NotebookLinksQueryOptions extends QueryOptions
{
    /**
     * Available select fields for NotebookLinks
     */
    public const FIELD_ONE_NOTE_CLIENT_URL = 'oneNoteClientUrl';
    public const FIELD_ONE_NOTE_WEB_URL = 'oneNoteWebUrl';

    /**
     * Select specific NotebookLinks properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
