<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceAnnouncement resources
 *
 * Available select fields:
 * - healthOverviews
 * - issues
 * - messages
 */
class ServiceAnnouncementQueryOptions extends QueryOptions
{
    public const FIELD_HEALTH_OVERVIEWS = 'healthOverviews';
    public const FIELD_ISSUES = 'issues';
    public const FIELD_MESSAGES = 'messages';

    /**
     * Select specific ServiceAnnouncement properties
     * 
     * @param array<string> $select Use ServiceAnnouncementQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
