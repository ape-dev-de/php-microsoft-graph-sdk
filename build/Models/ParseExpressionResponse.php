<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ParseExpressionResponse
 */
class ParseExpressionResponse
{
    public function __construct(
        /** Error details, if expression evaluation resulted in an error. */
        public ?PublicError $error = null,
        /** @var string[] A collection of values produced by the evaluation of the expression. */
        public array $evaluationResult = [],
        /** true if the evaluation was successful. */
        public ?bool $evaluationSucceeded = null,
        /** An attributeMappingSource object representing the parsed expression. */
        public ?AttributeMappingSource $parsedExpression = null,
        /** true if the expression was parsed successfully. */
        public ?bool $parsingSucceeded = null
    ) {}
}
