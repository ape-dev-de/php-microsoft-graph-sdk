<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventExternalInformation resources
 *
 * Available select fields:
 * - applicationId
 * - externalEventId
 */
class VirtualEventExternalInformationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventExternalInformation
     */
    public const FIELD_APPLICATION_ID = 'applicationId';
    public const FIELD_EXTERNAL_EVENT_ID = 'externalEventId';

    /**
     * Select specific VirtualEventExternalInformation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
