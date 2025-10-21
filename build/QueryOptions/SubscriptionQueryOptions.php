<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Subscription resources
 *
 * Available select fields:
 * - applicationId
 * - changeType
 * - clientState
 * - creatorId
 * - encryptionCertificate
 * - encryptionCertificateId
 * - expirationDateTime
 * - includeResourceData
 * - latestSupportedTlsVersion
 * - lifecycleNotificationUrl
 * - notificationQueryOptions
 * - notificationUrl
 * - notificationUrlAppId
 * - resource
 */
class SubscriptionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Subscription
     */
    public const FIELD_APPLICATION_ID = 'applicationId';
    public const FIELD_CHANGE_TYPE = 'changeType';
    public const FIELD_CLIENT_STATE = 'clientState';
    public const FIELD_CREATOR_ID = 'creatorId';
    public const FIELD_ENCRYPTION_CERTIFICATE = 'encryptionCertificate';
    public const FIELD_ENCRYPTION_CERTIFICATE_ID = 'encryptionCertificateId';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_INCLUDE_RESOURCE_DATA = 'includeResourceData';
    public const FIELD_LATEST_SUPPORTED_TLS_VERSION = 'latestSupportedTlsVersion';
    public const FIELD_LIFECYCLE_NOTIFICATION_URL = 'lifecycleNotificationUrl';
    public const FIELD_NOTIFICATION_QUERY_OPTIONS = 'notificationQueryOptions';
    public const FIELD_NOTIFICATION_URL = 'notificationUrl';
    public const FIELD_NOTIFICATION_URL_APP_ID = 'notificationUrlAppId';
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific Subscription properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
