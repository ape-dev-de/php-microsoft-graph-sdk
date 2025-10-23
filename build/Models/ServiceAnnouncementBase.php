<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceAnnouncementBase
 */
class ServiceAnnouncementBase
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * More details about service event. This property doesn't support filters.
     * @var KeyValuePair[]
     */
    public array $details = [];

    /** The end time of the service event. */
    public ?\DateTimeInterface $endDateTime = null;

    /** The last modified time of the service event. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The start time of the service event. */
    public ?\DateTimeInterface $startDateTime = null;

    /** The title of the service event. */
    public ?string $title = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = $data['endDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = $data['startDateTime'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
    }
}
