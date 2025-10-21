<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileLobApp resources
 *
 * Available select fields:
 * - committedContentVersion
 * - fileName
 * - size
 * - contentVersions
 */
class MobileLobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileLobApp
     */
    public const FIELD_COMMITTED_CONTENT_VERSION = 'committedContentVersion';
    public const FIELD_FILE_NAME = 'fileName';
    public const FIELD_SIZE = 'size';
    public const FIELD_CONTENT_VERSIONS = 'contentVersions';

    /**
     * Select specific MobileLobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
