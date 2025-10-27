<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecentNotebook
 */
class RecentNotebook
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the notebook. */
    public ?string $displayName = null;

    /** The date and time when the notebook was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $lastAccessedTime = null;

    /** 
     * Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote client, if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
     * @var RecentNotebookLinks|\stdClass|null
     */
    public RecentNotebookLinks|\stdClass|null $links = null;

    /** 
     * The backend store where the Notebook resides, either OneDriveForBusiness or OneDrive.
     * @var OnenoteSourceService|\stdClass|null
     */
    public OnenoteSourceService|\stdClass|null $sourceService = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastAccessedTime'])) {
            $this->lastAccessedTime = is_string($data['lastAccessedTime']) ? new \DateTimeImmutable($data['lastAccessedTime']) : $data['lastAccessedTime'];
        }
        if (isset($data['links'])) {
            $this->links = is_array($data['links']) ? new RecentNotebookLinks($data['links']) : $data['links'];
        }
        if (isset($data['sourceService'])) {
            $this->sourceService = is_array($data['sourceService']) ? new OnenoteSourceService($data['sourceService']) : $data['sourceService'];
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
