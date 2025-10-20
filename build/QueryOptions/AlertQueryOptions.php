<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Alert resources
 *
 * Available select fields:
 * - activityGroupName
 * - alertDetections
 * - assignedTo
 * - azureSubscriptionId
 * - azureTenantId
 * - category
 * - closedDateTime
 * - cloudAppStates
 * - comments
 * - confidence
 * - createdDateTime
 * - description
 * - detectionIds
 * - eventDateTime
 * - feedback
 * - fileStates
 * - historyStates
 * - hostStates
 * - incidentIds
 * - investigationSecurityStates
 * - lastEventDateTime
 * - lastModifiedDateTime
 * - malwareStates
 * - messageSecurityStates
 * - networkConnections
 * - processes
 * - recommendedActions
 * - registryKeyStates
 * - securityResources
 * - severity
 * - sourceMaterials
 * - status
 * - tags
 * - title
 * - triggers
 * - uriClickSecurityStates
 * - userStates
 * - vendorInformation
 * - vulnerabilityStates
 */
class AlertQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY_GROUP_NAME = 'activityGroupName';
    public const FIELD_ALERT_DETECTIONS = 'alertDetections';
    public const FIELD_ASSIGNED_TO = 'assignedTo';
    public const FIELD_AZURE_SUBSCRIPTION_ID = 'azureSubscriptionId';
    public const FIELD_AZURE_TENANT_ID = 'azureTenantId';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CLOSED_DATE_TIME = 'closedDateTime';
    public const FIELD_CLOUD_APP_STATES = 'cloudAppStates';
    public const FIELD_COMMENTS = 'comments';
    public const FIELD_CONFIDENCE = 'confidence';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DETECTION_IDS = 'detectionIds';
    public const FIELD_EVENT_DATE_TIME = 'eventDateTime';
    public const FIELD_FEEDBACK = 'feedback';
    public const FIELD_FILE_STATES = 'fileStates';
    public const FIELD_HISTORY_STATES = 'historyStates';
    public const FIELD_HOST_STATES = 'hostStates';
    public const FIELD_INCIDENT_IDS = 'incidentIds';
    public const FIELD_INVESTIGATION_SECURITY_STATES = 'investigationSecurityStates';
    public const FIELD_LAST_EVENT_DATE_TIME = 'lastEventDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_MALWARE_STATES = 'malwareStates';
    public const FIELD_MESSAGE_SECURITY_STATES = 'messageSecurityStates';
    public const FIELD_NETWORK_CONNECTIONS = 'networkConnections';
    public const FIELD_PROCESSES = 'processes';
    public const FIELD_RECOMMENDED_ACTIONS = 'recommendedActions';
    public const FIELD_REGISTRY_KEY_STATES = 'registryKeyStates';
    public const FIELD_SECURITY_RESOURCES = 'securityResources';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_SOURCE_MATERIALS = 'sourceMaterials';
    public const FIELD_STATUS = 'status';
    public const FIELD_TAGS = 'tags';
    public const FIELD_TITLE = 'title';
    public const FIELD_TRIGGERS = 'triggers';
    public const FIELD_URI_CLICK_SECURITY_STATES = 'uriClickSecurityStates';
    public const FIELD_USER_STATES = 'userStates';
    public const FIELD_VENDOR_INFORMATION = 'vendorInformation';
    public const FIELD_VULNERABILITY_STATES = 'vulnerabilityStates';

    /**
     * Select specific Alert properties
     * 
     * @param array<string> $select Use AlertQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
