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
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_MAX_IMAGE_SIZE = 'maxImageSize';
    public const FIELD_TIMEOUT = 'timeout';

    /**
     * Select specific SecurityOcrSettings properties
     * 
     * @param array<string> $select Use SecurityOcrSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
