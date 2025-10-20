<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryCustodian resources
 *
 * Available select fields:
 * - acknowledgedDateTime
 * - email
 * - lastIndexOperation
 * - siteSources
 * - unifiedGroupSources
 * - userSources
 */
class SecurityEdiscoveryCustodianQueryOptions extends QueryOptions
{
    public const FIELD_ACKNOWLEDGED_DATE_TIME = 'acknowledgedDateTime';
    public const FIELD_EMAIL = 'email';
    public const FIELD_LAST_INDEX_OPERATION = 'lastIndexOperation';
    public const FIELD_SITE_SOURCES = 'siteSources';
    public const FIELD_UNIFIED_GROUP_SOURCES = 'unifiedGroupSources';
    public const FIELD_USER_SOURCES = 'userSources';

    /**
     * Select specific SecurityEdiscoveryCustodian properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryCustodianQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
