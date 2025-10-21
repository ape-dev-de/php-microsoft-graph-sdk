<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppTroubleshootingEvent resources
 *
 * Available select fields:
 * - appLogCollectionRequests
 */
class MobileAppTroubleshootingEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppTroubleshootingEvent
     */
    public const FIELD_APP_LOG_COLLECTION_REQUESTS = 'appLogCollectionRequests';

    /**
     * Select specific MobileAppTroubleshootingEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
