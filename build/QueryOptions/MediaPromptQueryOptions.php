<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaPrompt resources
 *
 * Available select fields:
 * - mediaInfo
 */
class MediaPromptQueryOptions extends QueryOptions
{
    public const FIELD_MEDIA_INFO = 'mediaInfo';

    /**
     * Select specific MediaPrompt properties
     * 
     * @param array<string> $select Use MediaPromptQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
