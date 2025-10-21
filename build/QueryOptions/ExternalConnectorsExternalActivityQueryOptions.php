<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalActivity resources
 *
 * Available select fields:
 * - startDateTime
 * - type
 * - performedBy
 */
class ExternalConnectorsExternalActivityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsExternalActivity
     */
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_TYPE = 'type';
    public const FIELD_PERFORMED_BY = 'performedBy';

    /**
     * Select specific ExternalConnectorsExternalActivity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
