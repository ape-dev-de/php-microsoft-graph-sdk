<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIncident resources
 *
 * Available select fields:
 * - assignedTo
 * - classification
 * - comments
 * - createdDateTime
 * - customTags
 * - description
 * - determination
 * - displayName
 * - incidentWebUrl
 * - lastModifiedBy
 * - lastUpdateDateTime
 * - redirectIncidentId
 * - resolvingComment
 * - severity
 * - status
 * - summary
 * - systemTags
 * - tenantId
 * - alerts
 */
class SecurityIncidentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIncident
     */
    public const FIELD_ASSIGNED_TO = 'assignedTo';
    public const FIELD_CLASSIFICATION = 'classification';
    public const FIELD_COMMENTS = 'comments';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CUSTOM_TAGS = 'customTags';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DETERMINATION = 'determination';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_INCIDENT_WEB_URL = 'incidentWebUrl';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_UPDATE_DATE_TIME = 'lastUpdateDateTime';
    public const FIELD_REDIRECT_INCIDENT_ID = 'redirectIncidentId';
    public const FIELD_RESOLVING_COMMENT = 'resolvingComment';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_STATUS = 'status';
    public const FIELD_SUMMARY = 'summary';
    public const FIELD_SYSTEM_TAGS = 'systemTags';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_ALERTS = 'alerts';

    /**
     * Select specific SecurityIncident properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
