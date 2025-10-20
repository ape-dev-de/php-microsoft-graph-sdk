<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ParseExpressionResponse
 */
class ParseExpressionResponse
{
    /**
     * Error details, if expression evaluation resulted in an error.
     */
    private ?string $error;

    /**
     * A collection of values produced by the evaluation of the expression.
     */
    private ?string $evaluationResult;

    /**
     * true if the evaluation was successful.
     */
    private ?bool $evaluationSucceeded;

    /**
     * An attributeMappingSource object representing the parsed expression.
     */
    private ?string $parsedExpression;

    /**
     * true if the expression was parsed successfully.
     */
    private ?string $parsingSucceeded;

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getEvaluationResult(): ?string
    {
        return $this->evaluationResult;
    }

    public function setEvaluationResult(?string $evaluationResult): self
    {
        $this->evaluationResult = $evaluationResult;
        return $this;
    }

    public function getEvaluationSucceeded(): ?bool
    {
        return $this->evaluationSucceeded;
    }

    public function setEvaluationSucceeded(?bool $evaluationSucceeded): self
    {
        $this->evaluationSucceeded = $evaluationSucceeded;
        return $this;
    }

    public function getParsedExpression(): ?string
    {
        return $this->parsedExpression;
    }

    public function setParsedExpression(?string $parsedExpression): self
    {
        $this->parsedExpression = $parsedExpression;
        return $this;
    }

    public function getParsingSucceeded(): ?string
    {
        return $this->parsingSucceeded;
    }

    public function setParsingSucceeded(?string $parsingSucceeded): self
    {
        $this->parsingSucceeded = $parsingSucceeded;
        return $this;
    }

}
