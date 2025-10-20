<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageSubject resources
 *
 * Available select fields:
 * - displayName
 * - email
 * - objectId
 * - onPremisesSecurityIdentifier
 * - principalName
 * - subjectType
 * - connectedOrganization
 */
class AccessPackageSubjectQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL = 'email';
    public const FIELD_OBJECT_ID = 'objectId';
    public const FIELD_ON_PREMISES_SECURITY_IDENTIFIER = 'onPremisesSecurityIdentifier';
    public const FIELD_PRINCIPAL_NAME = 'principalName';
    public const FIELD_SUBJECT_TYPE = 'subjectType';
    public const FIELD_CONNECTED_ORGANIZATION = 'connectedOrganization';

    /**
     * Select specific AccessPackageSubject properties
     * 
     * @param array<string> $select Use AccessPackageSubjectQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
