<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisionedIdentity
 */
class ProvisionedIdentity
{
    /** Unique identifier for the identity or actor. For example, in the access reviews decisions API, this property might record the id of the principal, that is, the group, user, or application that's subject to review. */
    public ?string $id = null;

    /** The display name of the identity.For drive items, the display name might not always be available or up to date. For example, if a user changes their display name the API might show the new value in a future response, but the items associated with the user don't show up as changed when using delta. */
    public ?string $displayName = null;

    /** 
     * Details of the identity.
     * @var DetailsInfo|\stdClass|null
     */
    public mixed $details = null;

    /** Type of identity that has been provisioned, such as 'user' or 'group'. Supports $filter (eq, contains). */
    public ?string $identityType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['identityType'])) {
            $this->identityType = $data['identityType'];
        }
    }
}
