<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePage
 */
class OnenotePage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The endpoint where you can get details about the page. Read-only. */
    public ?string $self = null;

    /** The date and time when the page was created. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The page's HTML content. */
    public ?string $content = null;

    /** The URL for the page's HTML content.  Read-only. */
    public ?string $contentUrl = null;

    /** The unique identifier of the application that created the page. Read-only. */
    public ?string $createdByAppId = null;

    /** The date and time when the page was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The indentation level of the page. Read-only. */
    public ?float $level = null;

    /** 
     * Links for opening the page. The oneNoteClientURL link opens the page in the OneNote native client if it 's installed. The oneNoteWebUrl link opens the page in OneNote on the web. Read-only.
     * @var PageLinks|\stdClass|null
     */
    public mixed $links = null;

    /** The order of the page within its parent section. Read-only. */
    public ?float $order = null;

    /** The title of the page. */
    public ?string $title = null;

    /** 
     * 
     * @var string[]
     */
    public array $userTags = [];

    /** 
     * The notebook that contains the page.  Read-only.
     * @var Notebook|\stdClass|null
     */
    public mixed $parentNotebook = null;

    /** 
     * The section that contains the page. Read-only.
     * @var OnenoteSection|\stdClass|null
     */
    public mixed $parentSection = null;


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
        if (isset($data['self'])) {
            $this->self = $data['self'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['contentUrl'])) {
            $this->contentUrl = $data['contentUrl'];
        }
        if (isset($data['createdByAppId'])) {
            $this->createdByAppId = $data['createdByAppId'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['level'])) {
            $this->level = $data['level'];
        }
        if (isset($data['links'])) {
            $this->links = is_array($data['links']) ? new PageLinks($data['links']) : $data['links'];
        }
        if (isset($data['order'])) {
            $this->order = $data['order'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['userTags'])) {
            $this->userTags = $data['userTags'];
        }
        if (isset($data['parentNotebook'])) {
            $this->parentNotebook = is_array($data['parentNotebook']) ? new Notebook($data['parentNotebook']) : $data['parentNotebook'];
        }
        if (isset($data['parentSection'])) {
            $this->parentSection = is_array($data['parentSection']) ? new OnenoteSection($data['parentSection']) : $data['parentSection'];
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
