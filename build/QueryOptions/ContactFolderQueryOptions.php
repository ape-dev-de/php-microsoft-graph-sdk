<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContactFolder resources
 *
 * Available select fields:
 * - displayName
 * - parentFolderId
 * - childFolders
 * - contacts
 * - multiValueExtendedProperties
 * - singleValueExtendedProperties
 */
class ContactFolderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ContactFolder
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_PARENT_FOLDER_ID = 'parentFolderId';
    public const FIELD_CHILD_FOLDERS = 'childFolders';
    public const FIELD_CONTACTS = 'contacts';
    public const FIELD_MULTI_VALUE_EXTENDED_PROPERTIES = 'multiValueExtendedProperties';
    public const FIELD_SINGLE_VALUE_EXTENDED_PROPERTIES = 'singleValueExtendedProperties';

    /**
     * Select specific ContactFolder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
