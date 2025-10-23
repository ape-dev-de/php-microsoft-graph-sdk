<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Permission
 */
class Permission
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** A format of yyyy-MM-ddTHH:mm:ssZ of DateTimeOffset indicates the expiration time of the permission. DateTime.MinValue indicates there's no expiration set for this permission. Optional. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** 
     * For user type permissions, the details of the users and applications for this permission. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $grantedTo = null;

    /** 
     * For type permissions, the details of the users to whom permission was granted. Read-only.
     * @var IdentitySet[]
     */
    public array $grantedToIdentities = [];

    /** 
     * For link type permissions, the details of the users to whom permission was granted. Read-only.
     * @var SharePointIdentitySet[]
     */
    public array $grantedToIdentitiesV2 = [];

    /** 
     * For user type permissions, the details of the users and applications for this permission. Read-only.
     * @var SharePointIdentitySet|\stdClass|null
     */
    public mixed $grantedToV2 = null;

    /** Indicates whether the password is set for this permission. This property only appears in the response. Optional. Read-only. For OneDrive Personal only.. */
    public ?bool $hasPassword = null;

    /** 
     * Provides a reference to the ancestor of the current permission, if it's inherited from an ancestor. Read-only.
     * @var ItemReference|\stdClass|null
     */
    public mixed $inheritedFrom = null;

    /** 
     * Details of any associated sharing invitation for this permission. Read-only.
     * @var SharingInvitation|\stdClass|null
     */
    public mixed $invitation = null;

    /** 
     * Provides the link details of the current permission, if it's a link type permission. Read-only.
     * @var SharingLink|\stdClass|null
     */
    public mixed $link = null;

    /** 
     * The type of permission, for example, read. See below for the full list of roles. Read-only.
     * @var string[]
     */
    public array $roles = [];

    /** A unique token that can be used to access this shared item via the shares API. Read-only. */
    public ?string $shareId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = is_string($data['expirationDateTime']) ? new \DateTimeImmutable($data['expirationDateTime']) : $data['expirationDateTime'];
        }
        if (isset($data['grantedTo'])) {
            $this->grantedTo = is_array($data['grantedTo']) ? new IdentitySet($data['grantedTo']) : $data['grantedTo'];
        }
        if (isset($data['grantedToIdentities'])) {
            $this->grantedToIdentities = $data['grantedToIdentities'];
        }
        if (isset($data['grantedToIdentitiesV2'])) {
            $this->grantedToIdentitiesV2 = $data['grantedToIdentitiesV2'];
        }
        if (isset($data['grantedToV2'])) {
            $this->grantedToV2 = is_array($data['grantedToV2']) ? new SharePointIdentitySet($data['grantedToV2']) : $data['grantedToV2'];
        }
        if (isset($data['hasPassword'])) {
            $this->hasPassword = $data['hasPassword'];
        }
        if (isset($data['inheritedFrom'])) {
            $this->inheritedFrom = is_array($data['inheritedFrom']) ? new ItemReference($data['inheritedFrom']) : $data['inheritedFrom'];
        }
        if (isset($data['invitation'])) {
            $this->invitation = is_array($data['invitation']) ? new SharingInvitation($data['invitation']) : $data['invitation'];
        }
        if (isset($data['link'])) {
            $this->link = is_array($data['link']) ? new SharingLink($data['link']) : $data['link'];
        }
        if (isset($data['roles'])) {
            $this->roles = $data['roles'];
        }
        if (isset($data['shareId'])) {
            $this->shareId = $data['shareId'];
        }
    }
}
