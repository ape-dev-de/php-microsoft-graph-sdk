<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LinkedResource resources
 *
 * Available select fields:
 * - applicationName
 * - displayName
 * - externalId
 * - webUrl
 */
class LinkedResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LinkedResource
     */
    public const FIELD_APPLICATION_NAME = 'applicationName';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific LinkedResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
