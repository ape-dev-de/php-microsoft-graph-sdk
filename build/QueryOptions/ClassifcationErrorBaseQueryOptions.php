<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ClassifcationErrorBase resources
 *
 * Available select fields:
 * - code
 * - innerError
 * - message
 * - target
 */
class ClassifcationErrorBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ClassifcationErrorBase
     */
    public const FIELD_CODE = 'code';
    public const FIELD_INNER_ERROR = 'innerError';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_TARGET = 'target';

    /**
     * Select specific ClassifcationErrorBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
