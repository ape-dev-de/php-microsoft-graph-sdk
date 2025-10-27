<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutlookCategory
 */
class OutlookCategory
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A pre-set color constant that characterizes a category, and that is mapped to one of 25 predefined colors. For more details, see the following note.
     * @var CategoryColor|\stdClass|null
     */
    public CategoryColor|\stdClass|null $color = null;

    /** A unique name that identifies a category in the user's mailbox. After a category is created, the name cannot be changed. Read-only. */
    public ?string $displayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['color'])) {
            $this->color = is_string($data['color']) ? CategoryColor::tryFrom($data['color']) : $data['color'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
