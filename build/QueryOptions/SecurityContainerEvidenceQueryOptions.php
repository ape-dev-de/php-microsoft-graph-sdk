<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityContainerEvidence resources
 *
 * Available select fields:
 * - args
 * - command
 * - containerId
 * - image
 * - isPrivileged
 * - name
 * - pod
 */
class SecurityContainerEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityContainerEvidence
     */
    public const FIELD_ARGS = 'args';
    public const FIELD_COMMAND = 'command';
    public const FIELD_CONTAINER_ID = 'containerId';
    public const FIELD_IMAGE = 'image';
    public const FIELD_IS_PRIVILEGED = 'isPrivileged';
    public const FIELD_NAME = 'name';
    public const FIELD_POD = 'pod';

    /**
     * Select specific SecurityContainerEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
