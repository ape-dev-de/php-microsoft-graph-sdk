<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailSearchFolder resources
 *
 * Available select fields:
 * - filterQuery
 * - includeNestedFolders
 * - isSupported
 * - sourceFolderIds
 */
class MailSearchFolderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailSearchFolder
     */
    public const FIELD_FILTER_QUERY = 'filterQuery';
    public const FIELD_INCLUDE_NESTED_FOLDERS = 'includeNestedFolders';
    public const FIELD_IS_SUPPORTED = 'isSupported';
    public const FIELD_SOURCE_FOLDER_IDS = 'sourceFolderIds';

    /**
     * Select specific MailSearchFolder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
