<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FilterClause resources
 *
 * Available select fields:
 * - operatorName
 * - sourceOperandName
 * - targetOperand
 */
class FilterClauseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FilterClause
     */
    public const FIELD_OPERATOR_NAME = 'operatorName';
    public const FIELD_SOURCE_OPERAND_NAME = 'sourceOperandName';
    public const FIELD_TARGET_OPERAND = 'targetOperand';

    /**
     * Select specific FilterClause properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
