<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentRequestorSettings resources
 *
 * Available select fields:
 * - allowCustomAssignmentSchedule
 * - enableOnBehalfRequestorsToAddAccess
 * - enableOnBehalfRequestorsToRemoveAccess
 * - enableOnBehalfRequestorsToUpdateAccess
 * - enableTargetsToSelfAddAccess
 * - enableTargetsToSelfRemoveAccess
 * - enableTargetsToSelfUpdateAccess
 * - onBehalfRequestors
 */
class AccessPackageAssignmentRequestorSettingsQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_CUSTOM_ASSIGNMENT_SCHEDULE = 'allowCustomAssignmentSchedule';
    public const FIELD_ENABLE_ON_BEHALF_REQUESTORS_TO_ADD_ACCESS = 'enableOnBehalfRequestorsToAddAccess';
    public const FIELD_ENABLE_ON_BEHALF_REQUESTORS_TO_REMOVE_ACCESS = 'enableOnBehalfRequestorsToRemoveAccess';
    public const FIELD_ENABLE_ON_BEHALF_REQUESTORS_TO_UPDATE_ACCESS = 'enableOnBehalfRequestorsToUpdateAccess';
    public const FIELD_ENABLE_TARGETS_TO_SELF_ADD_ACCESS = 'enableTargetsToSelfAddAccess';
    public const FIELD_ENABLE_TARGETS_TO_SELF_REMOVE_ACCESS = 'enableTargetsToSelfRemoveAccess';
    public const FIELD_ENABLE_TARGETS_TO_SELF_UPDATE_ACCESS = 'enableTargetsToSelfUpdateAccess';
    public const FIELD_ON_BEHALF_REQUESTORS = 'onBehalfRequestors';

    /**
     * Select specific AccessPackageAssignmentRequestorSettings properties
     * 
     * @param array<string> $select Use AccessPackageAssignmentRequestorSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
