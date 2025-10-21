<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaStream resources
 *
 * Available select fields:
 * - direction
 * - label
 * - mediaType
 * - serverMuted
 * - sourceId
 */
class MediaStreamQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MediaStream
     */
    public const FIELD_DIRECTION = 'direction';
    public const FIELD_LABEL = 'label';
    public const FIELD_MEDIA_TYPE = 'mediaType';
    public const FIELD_SERVER_MUTED = 'serverMuted';
    public const FIELD_SOURCE_ID = 'sourceId';

    /**
     * Select specific MediaStream properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
