<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnlineMeetingRestricted resources
 *
 * Available select fields:
 * - contentSharingDisabled
 * - videoDisabled
 */
class OnlineMeetingRestrictedQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT_SHARING_DISABLED = 'contentSharingDisabled';
    public const FIELD_VIDEO_DISABLED = 'videoDisabled';

    /**
     * Select specific OnlineMeetingRestricted properties
     * 
     * @param array<string> $select Use OnlineMeetingRestrictedQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
