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
    public const FIELD_APP_LOG_COLLECTION_REQUESTS = 'appLogCollectionRequests';

    /**
     * Select specific MobileAppTroubleshootingEvent properties
     * 
     * @param array<string> $select Use MobileAppTroubleshootingEventQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
