<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseDeltaFunctionResponse resources
 *
 * Available select fields:
 * - @odata.nextLink
 * - @odata.deltaLink
 */
class BaseDeltaFunctionResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BaseDeltaFunctionResponse
     */
    public const FIELD_@ODATA.NEXT_LINK = '@odata.nextLink';
    public const FIELD_@ODATA.DELTA_LINK = '@odata.deltaLink';

    /**
     * Select specific BaseDeltaFunctionResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
