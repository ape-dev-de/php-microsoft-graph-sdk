<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DocumentSet resources
 *
 * Available select fields:
 * - allowedContentTypes
 * - defaultContents
 * - propagateWelcomePageChanges
 * - shouldPrefixNameToFile
 * - welcomePageUrl
 * - sharedColumns
 * - welcomePageColumns
 */
class DocumentSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DocumentSet
     */
    public const FIELD_ALLOWED_CONTENT_TYPES = 'allowedContentTypes';
    public const FIELD_DEFAULT_CONTENTS = 'defaultContents';
    public const FIELD_PROPAGATE_WELCOME_PAGE_CHANGES = 'propagateWelcomePageChanges';
    public const FIELD_SHOULD_PREFIX_NAME_TO_FILE = 'shouldPrefixNameToFile';
    public const FIELD_WELCOME_PAGE_URL = 'welcomePageUrl';
    public const FIELD_SHARED_COLUMNS = 'sharedColumns';
    public const FIELD_WELCOME_PAGE_COLUMNS = 'welcomePageColumns';

    /**
     * Select specific DocumentSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
