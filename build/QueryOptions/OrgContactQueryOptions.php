<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OrgContact resources
 *
 * Available select fields:
 * - addresses
 * - companyName
 * - department
 * - displayName
 * - givenName
 * - jobTitle
 * - mail
 * - mailNickname
 * - onPremisesLastSyncDateTime
 * - onPremisesProvisioningErrors
 * - onPremisesSyncEnabled
 * - phones
 * - proxyAddresses
 * - serviceProvisioningErrors
 * - surname
 * - directReports
 * - manager
 * - memberOf
 * - transitiveMemberOf
 */
class OrgContactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OrgContact
     */
    public const FIELD_ADDRESSES = 'addresses';
    public const FIELD_COMPANY_NAME = 'companyName';
    public const FIELD_DEPARTMENT = 'department';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_GIVEN_NAME = 'givenName';
    public const FIELD_JOB_TITLE = 'jobTitle';
    public const FIELD_MAIL = 'mail';
    public const FIELD_MAIL_NICKNAME = 'mailNickname';
    public const FIELD_ON_PREMISES_LAST_SYNC_DATE_TIME = 'onPremisesLastSyncDateTime';
    public const FIELD_ON_PREMISES_PROVISIONING_ERRORS = 'onPremisesProvisioningErrors';
    public const FIELD_ON_PREMISES_SYNC_ENABLED = 'onPremisesSyncEnabled';
    public const FIELD_PHONES = 'phones';
    public const FIELD_PROXY_ADDRESSES = 'proxyAddresses';
    public const FIELD_SERVICE_PROVISIONING_ERRORS = 'serviceProvisioningErrors';
    public const FIELD_SURNAME = 'surname';
    public const FIELD_DIRECT_REPORTS = 'directReports';
    public const FIELD_MANAGER = 'manager';
    public const FIELD_MEMBER_OF = 'memberOf';
    public const FIELD_TRANSITIVE_MEMBER_OF = 'transitiveMemberOf';

    /**
     * Select specific OrgContact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
