<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityProcessEvidence resources
 *
 * Available select fields:
 * - detectionStatus
 * - imageFile
 * - mdeDeviceId
 * - parentProcessCreationDateTime
 * - parentProcessId
 * - parentProcessImageFile
 * - processCommandLine
 * - processCreationDateTime
 * - processId
 * - userAccount
 */
class SecurityProcessEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityProcessEvidence
     */
    public const FIELD_DETECTION_STATUS = 'detectionStatus';
    public const FIELD_IMAGE_FILE = 'imageFile';
    public const FIELD_MDE_DEVICE_ID = 'mdeDeviceId';
    public const FIELD_PARENT_PROCESS_CREATION_DATE_TIME = 'parentProcessCreationDateTime';
    public const FIELD_PARENT_PROCESS_ID = 'parentProcessId';
    public const FIELD_PARENT_PROCESS_IMAGE_FILE = 'parentProcessImageFile';
    public const FIELD_PROCESS_COMMAND_LINE = 'processCommandLine';
    public const FIELD_PROCESS_CREATION_DATE_TIME = 'processCreationDateTime';
    public const FIELD_PROCESS_ID = 'processId';
    public const FIELD_USER_ACCOUNT = 'userAccount';

    /**
     * Select specific SecurityProcessEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
