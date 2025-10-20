<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentPolicy resources
 *
 * Available select fields:
 * - allowedTargetScope
 * - automaticRequestSettings
 * - createdDateTime
 * - description
 * - displayName
 * - expiration
 * - modifiedDateTime
 * - notificationSettings
 * - requestApprovalSettings
 * - requestorSettings
 * - reviewSettings
 * - specificAllowedTargets
 * - accessPackage
 * - catalog
 * - customExtensionStageSettings
 * - questions
 */
class AccessPackageAssignmentPolicyQueryOptions extends QueryOptions
{
    public const FIELD_ALLOWED_TARGET_SCOPE = 'allowedTargetScope';
    public const FIELD_AUTOMATIC_REQUEST_SETTINGS = 'automaticRequestSettings';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXPIRATION = 'expiration';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_NOTIFICATION_SETTINGS = 'notificationSettings';
    public const FIELD_REQUEST_APPROVAL_SETTINGS = 'requestApprovalSettings';
    public const FIELD_REQUESTOR_SETTINGS = 'requestorSettings';
    public const FIELD_REVIEW_SETTINGS = 'reviewSettings';
    public const FIELD_SPECIFIC_ALLOWED_TARGETS = 'specificAllowedTargets';
    public const FIELD_ACCESS_PACKAGE = 'accessPackage';
    public const FIELD_CATALOG = 'catalog';
    public const FIELD_CUSTOM_EXTENSION_STAGE_SETTINGS = 'customExtensionStageSettings';
    public const FIELD_QUESTIONS = 'questions';

    /**
     * Select specific AccessPackageAssignmentPolicy properties
     * 
     * @param array<string> $select Use AccessPackageAssignmentPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
