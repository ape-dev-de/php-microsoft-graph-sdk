<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAlert resources
 *
 * Available select fields:
 * - actorDisplayName
 * - additionalData
 * - alertPolicyId
 * - alertWebUrl
 * - assignedTo
 * - category
 * - classification
 * - comments
 * - createdDateTime
 * - customDetails
 * - description
 * - detectionSource
 * - detectorId
 * - determination
 * - evidence
 * - firstActivityDateTime
 * - incidentId
 * - incidentWebUrl
 * - lastActivityDateTime
 * - lastUpdateDateTime
 * - mitreTechniques
 * - productName
 * - providerAlertId
 * - recommendedActions
 * - resolvedDateTime
 * - serviceSource
 * - severity
 * - status
 * - systemTags
 * - tenantId
 * - threatDisplayName
 * - threatFamilyName
 * - title
 */
class SecurityAlertQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAlert
     */
    public const FIELD_ACTOR_DISPLAY_NAME = 'actorDisplayName';
    public const FIELD_ADDITIONAL_DATA = 'additionalData';
    public const FIELD_ALERT_POLICY_ID = 'alertPolicyId';
    public const FIELD_ALERT_WEB_URL = 'alertWebUrl';
    public const FIELD_ASSIGNED_TO = 'assignedTo';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CLASSIFICATION = 'classification';
    public const FIELD_COMMENTS = 'comments';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CUSTOM_DETAILS = 'customDetails';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DETECTION_SOURCE = 'detectionSource';
    public const FIELD_DETECTOR_ID = 'detectorId';
    public const FIELD_DETERMINATION = 'determination';
    public const FIELD_EVIDENCE = 'evidence';
    public const FIELD_FIRST_ACTIVITY_DATE_TIME = 'firstActivityDateTime';
    public const FIELD_INCIDENT_ID = 'incidentId';
    public const FIELD_INCIDENT_WEB_URL = 'incidentWebUrl';
    public const FIELD_LAST_ACTIVITY_DATE_TIME = 'lastActivityDateTime';
    public const FIELD_LAST_UPDATE_DATE_TIME = 'lastUpdateDateTime';
    public const FIELD_MITRE_TECHNIQUES = 'mitreTechniques';
    public const FIELD_PRODUCT_NAME = 'productName';
    public const FIELD_PROVIDER_ALERT_ID = 'providerAlertId';
    public const FIELD_RECOMMENDED_ACTIONS = 'recommendedActions';
    public const FIELD_RESOLVED_DATE_TIME = 'resolvedDateTime';
    public const FIELD_SERVICE_SOURCE = 'serviceSource';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_STATUS = 'status';
    public const FIELD_SYSTEM_TAGS = 'systemTags';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_THREAT_DISPLAY_NAME = 'threatDisplayName';
    public const FIELD_THREAT_FAMILY_NAME = 'threatFamilyName';
    public const FIELD_TITLE = 'title';

    /**
     * Select specific SecurityAlert properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
