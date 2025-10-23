<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUnifiedGroupSource
 */
class SecurityUnifiedGroupSource
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

    /** 
     * Specifies which sources are included in this group. Possible values are: mailbox, site.
     * @var SecuritySourceType|\stdClass|null
     */
    public mixed $includedSources = null;

    /**  */
    public ?Group $group = null;


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
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['holdStatus'])) {
            $this->holdStatus = $data['holdStatus'];
        }
        if (isset($data['includedSources'])) {
            $this->includedSources = $data['includedSources'];
        }
        if (isset($data['group'])) {
            $this->group = $data['group'];
        }
    }
}
