<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityOcrSettings resources
 *
 * Available select fields:
 * - isEnabled
 * - maxImageSize
 * - timeout
 */
class SecurityOcrSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityOcrSettings
     */
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_MAX_IMAGE_SIZE = 'maxImageSize';
    public const FIELD_TIMEOUT = 'timeout';

    /**
     * Select specific SecurityOcrSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
