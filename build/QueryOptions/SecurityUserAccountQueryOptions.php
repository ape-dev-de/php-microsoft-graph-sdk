<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUserAccount resources
 *
 * Available select fields:
 * - accountName
 * - activeDirectoryObjectGuid
 * - azureAdUserId
 * - displayName
 * - domainName
 * - resourceAccessEvents
 * - userPrincipalName
 * - userSid
 */
class SecurityUserAccountQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityUserAccount
     */
    public const FIELD_ACCOUNT_NAME = 'accountName';
    public const FIELD_ACTIVE_DIRECTORY_OBJECT_GUID = 'activeDirectoryObjectGuid';
    public const FIELD_AZURE_AD_USER_ID = 'azureAdUserId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DOMAIN_NAME = 'domainName';
    public const FIELD_RESOURCE_ACCESS_EVENTS = 'resourceAccessEvents';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';
    public const FIELD_USER_SID = 'userSid';

    /**
     * Select specific SecurityUserAccount properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
