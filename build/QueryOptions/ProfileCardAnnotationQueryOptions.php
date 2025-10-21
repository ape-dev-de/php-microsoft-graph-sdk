<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProfileCardAnnotation resources
 *
 * Available select fields:
 * - displayName
 * - localizations
 */
class ProfileCardAnnotationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProfileCardAnnotation
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LOCALIZATIONS = 'localizations';

    /**
     * Select specific ProfileCardAnnotation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
