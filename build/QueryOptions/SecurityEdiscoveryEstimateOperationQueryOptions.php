<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryEstimateOperation resources
 *
 * Available select fields:
 * - indexedItemCount
 * - indexedItemsSize
 * - mailboxCount
 * - reportFileMetadata
 * - siteCount
 * - statisticsOptions
 * - unindexedItemCount
 * - unindexedItemsSize
 * - search
 */
class SecurityEdiscoveryEstimateOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryEstimateOperation
     */
    public const FIELD_INDEXED_ITEM_COUNT = 'indexedItemCount';
    public const FIELD_INDEXED_ITEMS_SIZE = 'indexedItemsSize';
    public const FIELD_MAILBOX_COUNT = 'mailboxCount';
    public const FIELD_REPORT_FILE_METADATA = 'reportFileMetadata';
    public const FIELD_SITE_COUNT = 'siteCount';
    public const FIELD_STATISTICS_OPTIONS = 'statisticsOptions';
    public const FIELD_UNINDEXED_ITEM_COUNT = 'unindexedItemCount';
    public const FIELD_UNINDEXED_ITEMS_SIZE = 'unindexedItemsSize';
    public const FIELD_SEARCH = 'search';

    /**
     * Select specific SecurityEdiscoveryEstimateOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
