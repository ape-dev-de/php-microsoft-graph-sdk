<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ParseExpressionResponse
 */
class ParseExpressionResponse
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Error details, if expression evaluation resulted in an error.
     * @var PublicError|\stdClass|null
     */
    public PublicError|\stdClass|null $error = null;

    /** 
     * A collection of values produced by the evaluation of the expression.
     * @var string[]
     */
    public array $evaluationResult = [];

    /** true if the evaluation was successful. */
    public ?bool $evaluationSucceeded = null;

    /** 
     * An attributeMappingSource object representing the parsed expression.
     * @var AttributeMappingSource|\stdClass|null
     */
    public AttributeMappingSource|\stdClass|null $parsedExpression = null;

    /** true if the expression was parsed successfully. */
    public ?bool $parsingSucceeded = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
        }
        if (isset($data['evaluationResult'])) {
            $this->evaluationResult = $data['evaluationResult'];
        }
        if (isset($data['evaluationSucceeded'])) {
            $this->evaluationSucceeded = is_bool($data['evaluationSucceeded']) ? $data['evaluationSucceeded'] : (bool)$data['evaluationSucceeded'];
        }
        if (isset($data['parsedExpression'])) {
            $this->parsedExpression = is_array($data['parsedExpression']) ? new AttributeMappingSource($data['parsedExpression']) : $data['parsedExpression'];
        }
        if (isset($data['parsingSucceeded'])) {
            $this->parsingSucceeded = is_bool($data['parsingSucceeded']) ? $data['parsingSucceeded'] : (bool)$data['parsingSucceeded'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
