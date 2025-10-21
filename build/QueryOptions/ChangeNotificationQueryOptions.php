<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChangeNotification resources
 *
 * Available select fields:
 * - changeType
 * - clientState
 * - encryptedContent
 * - id
 * - lifecycleEvent
 * - resource
 * - resourceData
 * - subscriptionExpirationDateTime
 * - subscriptionId
 * - tenantId
 */
class ChangeNotificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChangeNotification
     */
    public const FIELD_CHANGE_TYPE = 'changeType';
    public const FIELD_CLIENT_STATE = 'clientState';
    public const FIELD_ENCRYPTED_CONTENT = 'encryptedContent';
    public const FIELD_ID = 'id';
    public const FIELD_LIFECYCLE_EVENT = 'lifecycleEvent';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_RESOURCE_DATA = 'resourceData';
    public const FIELD_SUBSCRIPTION_EXPIRATION_DATE_TIME = 'subscriptionExpirationDateTime';
    public const FIELD_SUBSCRIPTION_ID = 'subscriptionId';
    public const FIELD_TENANT_ID = 'tenantId';

    /**
     * Select specific ChangeNotification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
