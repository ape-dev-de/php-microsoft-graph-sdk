<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingLanguageDetail
 */
class TrainingLanguageDetail
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Language specific content for the training. */
    public ?string $content = null;

    /** 
     * Identity of the user who created the language details.
     * @var EmailIdentity|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Date and time when the language details were created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description as defined by the user. */
    public ?string $description = null;

    /** Display name as defined by the user. */
    public ?string $displayName = null;

    /** Indicates whether the training has a default language. */
    public ?bool $isDefaultLangauge = null;

    /** 
     * Identity of the user who last modified the details.
     * @var EmailIdentity|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Date and time when the trainingLanguageDetail was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Content locale for the training detail. */
    public ?string $locale = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isDefaultLangauge'])) {
            $this->isDefaultLangauge = $data['isDefaultLangauge'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['locale'])) {
            $this->locale = $data['locale'];
        }
    }
}
