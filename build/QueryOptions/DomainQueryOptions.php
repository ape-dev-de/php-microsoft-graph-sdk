<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Domain resources
 *
 * Available select fields:
 * - authenticationType
 * - availabilityStatus
 * - isAdminManaged
 * - isDefault
 * - isInitial
 * - isRoot
 * - isVerified
 * - manufacturer
 * - model
 * - passwordNotificationWindowInDays
 * - passwordValidityPeriodInDays
 * - state
 * - supportedServices
 * - domainNameReferences
 * - federationConfiguration
 * - rootDomain
 * - serviceConfigurationRecords
 * - verificationDnsRecords
 */
class DomainQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Domain
     */
    public const FIELD_AUTHENTICATION_TYPE = 'authenticationType';
    public const FIELD_AVAILABILITY_STATUS = 'availabilityStatus';
    public const FIELD_IS_ADMIN_MANAGED = 'isAdminManaged';
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_IS_INITIAL = 'isInitial';
    public const FIELD_IS_ROOT = 'isRoot';
    public const FIELD_IS_VERIFIED = 'isVerified';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MODEL = 'model';
    public const FIELD_PASSWORD_NOTIFICATION_WINDOW_IN_DAYS = 'passwordNotificationWindowInDays';
    public const FIELD_PASSWORD_VALIDITY_PERIOD_IN_DAYS = 'passwordValidityPeriodInDays';
    public const FIELD_STATE = 'state';
    public const FIELD_SUPPORTED_SERVICES = 'supportedServices';
    public const FIELD_DOMAIN_NAME_REFERENCES = 'domainNameReferences';
    public const FIELD_FEDERATION_CONFIGURATION = 'federationConfiguration';
    public const FIELD_ROOT_DOMAIN = 'rootDomain';
    public const FIELD_SERVICE_CONFIGURATION_RECORDS = 'serviceConfigurationRecords';
    public const FIELD_VERIFICATION_DNS_RECORDS = 'verificationDnsRecords';

    /**
     * Select specific Domain properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
