<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LoginPage
 */
class LoginPage
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The HTML content of the login page. */
    public ?string $content = null;

    /** 
     * Identity of the user who created the login page.
     * @var EmailIdentity|\stdClass|null
     */
    public mixed $createdBy = null;

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
    public mixed $lastModifiedBy = null;

    /** Date and time when the login page was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The source of the content. Possible values are: unknown, global, tenant, unknownFutureValue.
     * @var SimulationContentSource|\stdClass|null
     */
    public mixed $source = null;

    /** 
     * The login page status. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue.
     * @var SimulationContentStatus|\stdClass|null
     */
    public mixed $status = null;


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
        if (isset($data['language'])) {
            $this->language = $data['language'];
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
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
