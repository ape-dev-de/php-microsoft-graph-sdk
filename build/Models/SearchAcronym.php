<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAcronym
 */
class SearchAcronym
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The search answer description that is shown on the search results page. */
    public ?string $description = null;

    /** The search answer name that is displayed in search results. */
    public ?string $displayName = null;

    /** 
     * Details of the user who created or last modified the search answer. Read-only.
     * @var SearchIdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Date and time when the search answer was created or last edited. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The URL link for the search answer. When users select this search answer from the search results, they are directed to the specified URL. */
    public ?string $webUrl = null;

    /** What the acronym stands for. */
    public ?string $standsFor = null;

    /**  */
    public ?SearchAnswerState $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['standsFor'])) {
            $this->standsFor = $data['standsFor'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
    }
}
