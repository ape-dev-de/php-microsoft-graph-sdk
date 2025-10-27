<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LoginPage
 */
class LoginPage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The HTML content of the login page. */
    public ?string $content = null;

    /** 
     * Identity of the user who created the login page.
     * @var EmailIdentity|\stdClass|null
     */
    public EmailIdentity|\stdClass|null $createdBy = null;

    /** Date and time when the login page was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description about the login page. */
    public ?string $description = null;

    /** Display name of the login page. */
    public ?string $displayName = null;

    /** The content language of the login page. */
    public ?string $language = null;

    /** 
     * Identity of the user who last modified the login page.
     * @var EmailIdentity|\stdClass|null
     */
    public EmailIdentity|\stdClass|null $lastModifiedBy = null;

    /** Date and time when the login page was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The source of the content. Possible values are: unknown, global, tenant, unknownFutureValue.
     * @var SimulationContentSource|\stdClass|null
     */
    public SimulationContentSource|\stdClass|null $source = null;

    /** 
     * The login page status. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue.
     * @var SimulationContentStatus|\stdClass|null
     */
    public SimulationContentStatus|\stdClass|null $status = null;


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
        if (isset($data['content'])) {
            $this->content = $data['content'];
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
        if (isset($data['language'])) {
            $this->language = $data['language'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new EmailIdentity($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['source'])) {
            $this->source = is_string($data['source']) ? SimulationContentSource::tryFrom($data['source']) : $data['source'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? SimulationContentStatus::tryFrom($data['status']) : $data['status'];
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
