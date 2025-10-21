<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppListItem resources
 *
 * Available select fields:
 * - appId
 * - appStoreUrl
 * - name
 * - publisher
 */
class AppListItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppListItem
     */
    public const FIELD_APP_ID = 'appId';
    public const FIELD_APP_STORE_URL = 'appStoreUrl';
    public const FIELD_NAME = 'name';
    public const FIELD_PUBLISHER = 'publisher';

    /**
     * Select specific AppListItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
