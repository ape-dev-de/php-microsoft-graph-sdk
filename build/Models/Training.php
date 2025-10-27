<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Training
 */
class Training
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Training availability status. Possible values are: unknown, notAvailable, available, archive, delete, unknownFutureValue.
     * @var TrainingAvailabilityStatus|\stdClass|null
     */
    public TrainingAvailabilityStatus|\stdClass|null $availabilityStatus = null;

    /** 
     * Identity of the user who created the training.
     * @var EmailIdentity|\stdClass|null
     */
    public EmailIdentity|\stdClass|null $createdBy = null;

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
    public EmailIdentity|\stdClass|null $lastModifiedBy = null;

    /** Date and time when the training was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Training content source. Possible values are: unknown, global, tenant, unknownFutureValue.
     * @var SimulationContentSource|\stdClass|null
     */
    public SimulationContentSource|\stdClass|null $source = null;

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
    public TrainingType|\stdClass|null $type = null;

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
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['availabilityStatus'])) {
            $this->availabilityStatus = is_array($data['availabilityStatus']) ? new TrainingAvailabilityStatus($data['availabilityStatus']) : $data['availabilityStatus'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new EmailIdentity($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
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
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new EmailIdentity($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['source'])) {
            $this->source = is_array($data['source']) ? new SimulationContentSource($data['source']) : $data['source'];
        }
        if (isset($data['supportedLocales'])) {
            $this->supportedLocales = $data['supportedLocales'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new TrainingType($data['type']) : $data['type'];
        }
        if (isset($data['languageDetails'])) {
            $this->languageDetails = $data['languageDetails'];
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
