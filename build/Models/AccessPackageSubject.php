<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageSubject
 */
class AccessPackageSubject
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the subject. */
    public ?string $displayName = null;

    /** The email address of the subject. */
    public ?string $email = null;

    /** The object identifier of the subject. null if the subject isn't yet a user in the tenant. */
    public ?string $objectId = null;

    /** A string representation of the principal's security identifier, if known, or null if the subject doesn't have a security identifier. */
    public ?string $onPremisesSecurityIdentifier = null;

    /** The principal name, if known, of the subject. */
    public ?string $principalName = null;

    /** 
     * The resource type of the subject. The possible values are: notSpecified, user, servicePrincipal, unknownFutureValue.
     * @var AccessPackageSubjectType|\stdClass|null
     */
    public mixed $subjectType = null;

    /** 
     * The connected organization of the subject. Read-only. Nullable.
     * @var ConnectedOrganization|\stdClass|null
     */
    public mixed $connectedOrganization = null;


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
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['objectId'])) {
            $this->objectId = $data['objectId'];
        }
        if (isset($data['onPremisesSecurityIdentifier'])) {
            $this->onPremisesSecurityIdentifier = $data['onPremisesSecurityIdentifier'];
        }
        if (isset($data['principalName'])) {
            $this->principalName = $data['principalName'];
        }
        if (isset($data['subjectType'])) {
            $this->subjectType = is_array($data['subjectType']) ? new AccessPackageSubjectType($data['subjectType']) : $data['subjectType'];
        }
        if (isset($data['connectedOrganization'])) {
            $this->connectedOrganization = is_array($data['connectedOrganization']) ? new ConnectedOrganization($data['connectedOrganization']) : $data['connectedOrganization'];
        }
    }
}
