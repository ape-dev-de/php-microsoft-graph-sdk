<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteCollection resources
 *
 * Available select fields:
 * - archivalDetails
 * - dataLocationCode
 * - hostname
 * - root
 */
class SiteCollectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SiteCollection
     */
    public const FIELD_ARCHIVAL_DETAILS = 'archivalDetails';
    public const FIELD_DATA_LOCATION_CODE = 'dataLocationCode';
    public const FIELD_HOSTNAME = 'hostname';
    public const FIELD_ROOT = 'root';

    /**
     * Select specific SiteCollection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
