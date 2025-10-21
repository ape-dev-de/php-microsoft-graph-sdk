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
    /**
     * Available select fields for MediaPrompt
     */
    public const FIELD_MEDIA_INFO = 'mediaInfo';

    /**
     * Select specific MediaPrompt properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
