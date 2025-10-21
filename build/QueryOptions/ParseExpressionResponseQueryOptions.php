<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ParseExpressionResponse resources
 *
 * Available select fields:
 * - error
 * - evaluationResult
 * - evaluationSucceeded
 * - parsedExpression
 * - parsingSucceeded
 */
class ParseExpressionResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ParseExpressionResponse
     */
    public const FIELD_ERROR = 'error';
    public const FIELD_EVALUATION_RESULT = 'evaluationResult';
    public const FIELD_EVALUATION_SUCCEEDED = 'evaluationSucceeded';
    public const FIELD_PARSED_EXPRESSION = 'parsedExpression';
    public const FIELD_PARSING_SUCCEEDED = 'parsingSucceeded';

    /**
     * Select specific ParseExpressionResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
