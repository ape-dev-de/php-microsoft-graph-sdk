<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Simulation resources
 *
 * Available select fields:
 * - attackTechnique
 * - attackType
 * - automationId
 * - completionDateTime
 * - createdBy
 * - createdDateTime
 * - description
 * - displayName
 * - durationInDays
 * - endUserNotificationSetting
 * - excludedAccountTarget
 * - includedAccountTarget
 * - isAutomated
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - launchDateTime
 * - oAuthConsentAppDetail
 * - payloadDeliveryPlatform
 * - report
 * - status
 * - trainingSetting
 * - landingPage
 * - loginPage
 * - payload
 */
class SimulationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Simulation
     */
    public const FIELD_ATTACK_TECHNIQUE = 'attackTechnique';
    public const FIELD_ATTACK_TYPE = 'attackType';
    public const FIELD_AUTOMATION_ID = 'automationId';
    public const FIELD_COMPLETION_DATE_TIME = 'completionDateTime';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DURATION_IN_DAYS = 'durationInDays';
    public const FIELD_END_USER_NOTIFICATION_SETTING = 'endUserNotificationSetting';
    public const FIELD_EXCLUDED_ACCOUNT_TARGET = 'excludedAccountTarget';
    public const FIELD_INCLUDED_ACCOUNT_TARGET = 'includedAccountTarget';
    public const FIELD_IS_AUTOMATED = 'isAutomated';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_LAUNCH_DATE_TIME = 'launchDateTime';
    public const FIELD_O_AUTH_CONSENT_APP_DETAIL = 'oAuthConsentAppDetail';
    public const FIELD_PAYLOAD_DELIVERY_PLATFORM = 'payloadDeliveryPlatform';
    public const FIELD_REPORT = 'report';
    public const FIELD_STATUS = 'status';
    public const FIELD_TRAINING_SETTING = 'trainingSetting';
    public const FIELD_LANDING_PAGE = 'landingPage';
    public const FIELD_LOGIN_PAGE = 'loginPage';
    public const FIELD_PAYLOAD = 'payload';

    /**
     * Select specific Simulation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
