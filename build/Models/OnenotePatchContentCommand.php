<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePatchContentCommand
 */
class OnenotePatchContentCommand
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?OnenotePatchActionType $action = null;

    /** A string of well-formed HTML to add to the page, and any image or file binary data. If the content contains binary data, the request must be sent using the multipart/form-data content type with a 'Commands' part. */
    public ?string $content = null;

    /** 
     * The location to add the supplied content, relative to the target element. The possible values are: after (default) or before.
     * @var OnenotePatchInsertPosition|\stdClass|null
     */
    public mixed $position = null;

    /** The element to update. Must be the #<data-id> or the generated <id> of the element, or the body or title keyword. */
    public ?string $target = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['action'])) {
            $this->action = is_array($data['action']) ? new OnenotePatchActionType($data['action']) : $data['action'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['position'])) {
            $this->position = is_array($data['position']) ? new OnenotePatchInsertPosition($data['position']) : $data['position'];
        }
        if (isset($data['target'])) {
            $this->target = $data['target'];
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
