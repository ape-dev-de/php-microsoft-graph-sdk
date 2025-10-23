<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListInfo
 */
class ListInfo
{
    /** If true, indicates that content types are enabled for this list. */
    public ?bool $contentTypesEnabled = null;

    /** If true, indicates that the list isn't normally visible in the SharePoint user experience. */
    public ?bool $hidden = null;

    /** An enumerated value that represents the base list template used in creating the list. Possible values include documentLibrary, genericList, task, survey, announcements, contacts, and more. */
    public ?string $template = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['contentTypesEnabled'])) {
            $this->contentTypesEnabled = $data['contentTypesEnabled'];
        }
        if (isset($data['hidden'])) {
            $this->hidden = $data['hidden'];
        }
        if (isset($data['template'])) {
            $this->template = $data['template'];
        }
    }
}
