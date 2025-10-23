<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUserSource
 */
class SecurityUserSource
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The user who created the dataSource.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The date and time the dataSource was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The display name of the dataSource and is the name of the SharePoint site. */
    public ?string $displayName = null;

    /** 
     * The hold status of the dataSource.The possible values are: notApplied, applied, applying, removing, partial
     * @var SecurityDataSourceHoldStatus|\stdClass|null
     */
    public mixed $holdStatus = null;

    /** Email address of the user's mailbox. */
    public ?string $email = null;

    /** 
     * Specifies which sources are included in this group. Possible values are: mailbox, site.
     * @var SecuritySourceType|\stdClass|null
     */
    public mixed $includedSources = null;

    /** The URL of the user's OneDrive for Business site. Read-only. */
    public ?string $siteWebUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['holdStatus'])) {
            $this->holdStatus = $data['holdStatus'];
        }
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['includedSources'])) {
            $this->includedSources = $data['includedSources'];
        }
        if (isset($data['siteWebUrl'])) {
            $this->siteWebUrl = $data['siteWebUrl'];
        }
    }
}
