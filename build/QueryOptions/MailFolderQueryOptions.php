<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailFolder resources
 *
 * Available select fields:
 * - childFolderCount
 * - displayName
 * - isHidden
 * - parentFolderId
 * - totalItemCount
 * - unreadItemCount
 * - childFolders
 * - messageRules
 * - messages
 * - multiValueExtendedProperties
 * - singleValueExtendedProperties
 */
class MailFolderQueryOptions extends QueryOptions
{
    public const FIELD_CHILD_FOLDER_COUNT = 'childFolderCount';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_HIDDEN = 'isHidden';
    public const FIELD_PARENT_FOLDER_ID = 'parentFolderId';
    public const FIELD_TOTAL_ITEM_COUNT = 'totalItemCount';
    public const FIELD_UNREAD_ITEM_COUNT = 'unreadItemCount';
    public const FIELD_CHILD_FOLDERS = 'childFolders';
    public const FIELD_MESSAGE_RULES = 'messageRules';
    public const FIELD_MESSAGES = 'messages';
    public const FIELD_MULTI_VALUE_EXTENDED_PROPERTIES = 'multiValueExtendedProperties';
    public const FIELD_SINGLE_VALUE_EXTENDED_PROPERTIES = 'singleValueExtendedProperties';

    /**
     * Select specific MailFolder properties
     * 
     * @param array<string> $select Use MailFolderQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
