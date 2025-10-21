<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceUpdateMessageViewpoint resources
 *
 * Available select fields:
 * - isArchived
 * - isFavorited
 * - isRead
 */
class ServiceUpdateMessageViewpointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceUpdateMessageViewpoint
     */
    public const FIELD_IS_ARCHIVED = 'isArchived';
    public const FIELD_IS_FAVORITED = 'isFavorited';
    public const FIELD_IS_READ = 'isRead';

    /**
     * Select specific ServiceUpdateMessageViewpoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
