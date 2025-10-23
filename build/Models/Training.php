<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Training
 */
class Training
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Training availability status. Possible values are: unknown, notAvailable, available, archive, delete, unknownFutureValue.
     * @var TrainingAvailabilityStatus|\stdClass|null
     */
    public mixed $availabilityStatus = null;

    /** 
     * Identity of the user who created the training.
     * @var EmailIdentity|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Date and time when the training was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The description for the training. */
    public ?string $description = null;

    /** The display name for the training. */
    public ?string $displayName = null;

    /** Training duration. */
    public ?float $durationInMinutes = null;

    /** Indicates whether the training has any evaluation. */
    public ?bool $hasEvaluation = null;

    /** 
     * Identity of the user who last modified the training.
     * @var EmailIdentity|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Date and time when the training was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Training content source. Possible values are: unknown, global, tenant, unknownFutureValue.
     * @var SimulationContentSource|\stdClass|null
     */
    public mixed $source = null;

    /** 
     * Supported locales for content for the associated training.
     * @var string[]
     */
    public array $supportedLocales = [];

    /** 
     * Training tags.
     * @var string[]
     */
    public array $tags = [];

    /** 
     * The type of training. Possible values are: unknown, phishing, unknownFutureValue.
     * @var TrainingType|\stdClass|null
     */
    public mixed $type = null;

    /** 
     * Language specific details on a training.
     * @var TrainingLanguageDetail[]
     */
    public array $languageDetails = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['availabilityStatus'])) {
            $this->availabilityStatus = $data['availabilityStatus'];
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
        if (isset($data['durationInMinutes'])) {
            $this->durationInMinutes = $data['durationInMinutes'];
        }
        if (isset($data['hasEvaluation'])) {
            $this->hasEvaluation = $data['hasEvaluation'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['source'])) {
            $this->source = $data['source'];
        }
        if (isset($data['supportedLocales'])) {
            $this->supportedLocales = $data['supportedLocales'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['languageDetails'])) {
            $this->languageDetails = $data['languageDetails'];
        }
    }
}
