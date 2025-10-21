<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudClipboardItemPayload resources
 *
 * Available select fields:
 * - content
 * - formatName
 */
class CloudClipboardItemPayloadQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudClipboardItemPayload
     */
    public const FIELD_CONTENT = 'content';
    public const FIELD_FORMAT_NAME = 'formatName';

    /**
     * Select specific CloudClipboardItemPayload properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
