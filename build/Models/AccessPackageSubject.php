<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageSubject
 */
class AccessPackageSubject
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The display name of the subject. */
        public ?string $displayName = null,
        /** The email address of the subject. */
        public ?string $email = null,
        /** The object identifier of the subject. null if the subject isn't yet a user in the tenant. */
        public ?string $objectId = null,
        /** A string representation of the principal's security identifier, if known, or null if the subject doesn't have a security identifier. */
        public ?string $onPremisesSecurityIdentifier = null,
        /** The principal name, if known, of the subject. */
        public ?string $principalName = null,
        /** The resource type of the subject. The possible values are: notSpecified, user, servicePrincipal, unknownFutureValue. */
        public ?AccessPackageSubjectType $subjectType = null,
        /** The connected organization of the subject. Read-only. Nullable. */
        public ?ConnectedOrganization $connectedOrganization = null
    ) {}
}
