<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListInfo
 */
class ListInfo
{
    public function __construct(
        /** If true, indicates that content types are enabled for this list. */
        public ?bool $contentTypesEnabled = null,
        /** If true, indicates that the list isn't normally visible in the SharePoint user experience. */
        public ?bool $hidden = null,
        /** An enumerated value that represents the base list template used in creating the list. Possible values include documentLibrary, genericList, task, survey, announcements, contacts, and more. */
        public ?string $template = null
    ) {}
}
