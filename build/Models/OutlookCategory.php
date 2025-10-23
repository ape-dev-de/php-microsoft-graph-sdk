<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutlookCategory
 */
class OutlookCategory
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A pre-set color constant that characterizes a category, and that is mapped to one of 25 predefined colors. For more details, see the following note.
     * @var CategoryColor|\stdClass|null
     */
    public mixed $color = null;

    /** A unique name that identifies a category in the user's mailbox. After a category is created, the name cannot be changed. Read-only. */
    public ?string $displayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['color'])) {
            $this->color = $data['color'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
    }
}
